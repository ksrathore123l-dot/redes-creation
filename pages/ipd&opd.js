const toggle = document.querySelector(".menu-toggle");
const nav = document.querySelector(".nav");
toggle?.addEventListener("click", () => {
  nav.classList.toggle("open");
  toggle.innerHTML = nav.classList.contains("open")
    ? '<i class="fa-solid fa-xmark"></i>'
    : '<i class="fa-solid fa-bars"></i>';
});
document
  .querySelectorAll(".nav a")
  .forEach((a) =>
    a.addEventListener("click", () => nav.classList.remove("open")),
  );

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("visible");
        observer.unobserve(e.target);
      }
    });
  },
  { threshold: 0.12 },
);
document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));

// Counter Animation
const counters = document.querySelectorAll(".counter");
const speed = 60; // Lower is slower

const counterObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const updateCount = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText.replace(/,/g, "");
          const isDecimal = counter.getAttribute("data-decimal") === "true";

          const inc = target / speed;

          if (count < target) {
            let newValue = count + inc;
            if (isDecimal) {
              counter.innerText = newValue.toFixed(1);
            } else {
              counter.innerText = Math.ceil(newValue).toLocaleString();
            }
            setTimeout(updateCount, 25);
          } else {
            if (isDecimal) {
              counter.innerText = target.toFixed(1);
            } else {
              counter.innerText = target.toLocaleString();
            }
          }
        };
        updateCount();
        observer.unobserve(counter);
      }
    });
  },
  { threshold: 0.5 }
);

counters.forEach((counter) => {
  counterObserver.observe(counter);
});
