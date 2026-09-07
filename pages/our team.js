const menu = document.querySelector(".hamb");
const nav = document.querySelector("#nav");
if (menu && nav) {
  menu.onclick = () => nav.classList.toggle("open");
}

const modal = document.querySelector("#modal");
const storyBtn = document.querySelector("#story");
const closeBtn = document.querySelector("#close");

if (modal && storyBtn) {
  storyBtn.onclick = () => modal.classList.add("show");
}
if (modal && closeBtn) {
  closeBtn.onclick = () => modal.classList.remove("show");
}
if (modal) {
  modal.onclick = (e) => {
    if (e.target === modal) modal.classList.remove("show");
  };
}

document.querySelectorAll(".filters button").forEach(
  (btn) =>
    (btn.onclick = () => {
      document
        .querySelectorAll(".filters button")
        .forEach((x) => x.classList.remove("on"));
      btn.classList.add("on");
      const f = btn.dataset.filter;

      document
        .querySelectorAll(".member")
        .forEach(
          (card) =>
            (card.style.display =
              f === "all" || card.classList.contains(f) ? "" : "none"),
        );

      document.querySelectorAll(".group").forEach((group) => {
        const hasVisible = Array.from(group.querySelectorAll(".member")).some(
          (card) => card.style.display !== "none",
        );
        group.style.display = hasVisible ? "" : "none";
      });

      document.querySelectorAll(".columns").forEach((col) => {
        const hasVisible = Array.from(col.querySelectorAll(".group")).some(
          (group) => group.style.display !== "none",
        );
        col.style.display = hasVisible ? "" : "none";
      });
    }),
);

// Auto counting animation for stats
const counters = document.querySelectorAll(".counter");
const observer = new IntersectionObserver(
  (entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const target = +counter.getAttribute("data-target");
        let current = 0;
        const increment = target / 60;

        const updateCounter = () => {
          current += increment;
          if (current < target) {
            counter.innerText = Math.ceil(current);
            requestAnimationFrame(updateCounter);
          } else {
            counter.innerText = target;
          }
        };

        updateCounter();
        obs.unobserve(counter);
      }
    });
  },
  { threshold: 0.1 },
);

counters.forEach((counter) => observer.observe(counter));
