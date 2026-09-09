const menu = document.querySelector("#menu"),
  drawer = document.querySelector("#drawer");

if (menu && drawer) {
  menu.addEventListener("click", () => {
    drawer.classList.toggle("open");
    menu.innerHTML = drawer.classList.contains("open")
      ? '<i class="fa-solid fa-xmark"></i>'
      : '<i class="fa-solid fa-bars"></i>';
  });

  document.querySelectorAll(".rc-drawer a").forEach((a) =>
    a.addEventListener("click", () => {
      drawer.classList.remove("open");
      menu.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }),
  );
}
const obs = new IntersectionObserver(
  (es) =>
    es.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("show");
        obs.unobserve(e.target);
      }
    }),
  { threshold: 0.12 },
);
document.querySelectorAll(".rc-reveal").forEach((x) => obs.observe(x));

// Auto typing effect for Hero Title
const typeActive = document.querySelector(".rc-type-active");
if (typeActive) {
  const text1 = "ERP Solutions for ";
  const text2 = "Schools/Colleges";
  let i = 0;

  function typeWriter() {
    if (i < text1.length) {
      typeActive.innerHTML = text1.substring(0, i + 1);
      i++;
      setTimeout(typeWriter, 50);
    } else if (i === text1.length) {
      typeActive.innerHTML = text1 + "<em></em>";
      i++;
      setTimeout(typeWriter, 50);
    } else if (i <= text1.length + text2.length) {
      const emText = text2.substring(0, i - text1.length);
      typeActive.innerHTML = text1 + "<em>" + emText + "</em>";
      i++;
      setTimeout(typeWriter, 50);
    }
  }

  // Start the typing effect after a short delay (e.g. after it reveals)
  setTimeout(typeWriter, 800);
}
