const menuToggle = document.querySelector(".menu-toggle");
const mainNav = document.querySelector(".main-nav");

menuToggle?.addEventListener("click", () => {
  const open = mainNav.classList.toggle("open");
  menuToggle.classList.toggle("open", open);
  menuToggle.setAttribute("aria-expanded", String(open));
});

document.querySelectorAll(".main-nav a").forEach((link) => {
  link.addEventListener("click", () => {
    mainNav.classList.remove("open");
    menuToggle.classList.remove("open");
  });
});

// Smooth active nav state
const sections = document.querySelectorAll("header[id], main section[id]");
const navLinks = document.querySelectorAll(".main-nav a");

const activeObserver = new IntersectionObserver(
  (entries) => {
    let currentActiveId = null;
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        currentActiveId = entry.target.id;
      }
    });

    if (currentActiveId) {
      navLinks.forEach((a) => {
        a.classList.toggle(
          "active",
          a.getAttribute("href") === "#" + currentActiveId,
        );
      });
    }
  },
  { rootMargin: "-30% 0px -70% 0px", threshold: 0 },
);

sections.forEach((section) => activeObserver.observe(section));

// Click event for nav links to ensure active state applies immediately
navLinks.forEach((link) => {
  link.addEventListener("click", function () {
    navLinks.forEach((a) => a.classList.remove("active"));
    this.classList.add("active");
    // The mobile menu close logic if any (optional)
    document.querySelector(".main-nav")?.classList.remove("open");
    document.querySelector(".menu-toggle")?.classList.remove("open");
  });
});

/* Footer JS */
// Year
const yearEl = document.getElementById("year");
if (yearEl) {
  yearEl.textContent = new Date().getFullYear();
}
