document.addEventListener("DOMContentLoaded", () => {
  if (window.lucide) lucide.createIcons();

  const menu = document.querySelector(".rc-menu");
  const nav = document.querySelector(".rc-links");
  if (menu && nav) {
    menu.addEventListener("click", () => {
      nav.classList.toggle("rc-open");
      nav.style.display = nav.classList.contains("rc-open") ? "flex" : "";
      if (nav.classList.contains("rc-open")) {
        nav.style.position = "absolute";
        nav.style.top = "65px";
        nav.style.left = "0";
        nav.style.right = "0";
        nav.style.padding = "20px";
        nav.style.background = "#fff";
        nav.style.flexDirection = "column";
        nav.style.alignItems = "center";
        nav.style.boxShadow = "0 15px 30px #10264d20";
      }
    });
  }

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", (e) => {
      const target = document.querySelector(link.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
        if (nav) nav.classList.remove("rc-open");
      }
    });
  });
});
