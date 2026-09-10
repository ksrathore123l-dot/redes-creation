const menuBtn = document.getElementById("menuBtn");
const mobileNav = document.getElementById("mobileNav");
const toTop = document.getElementById("toTop");
const newsletterForm = document.getElementById("newsletterForm");
const formMsg = document.getElementById("formMsg");

menuBtn?.addEventListener("click", () => {
  const open = mobileNav.classList.toggle("open");
  menuBtn.setAttribute("aria-expanded", open ? "true" : "false");
  menuBtn.innerHTML = open ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
});

mobileNav?.querySelectorAll("a").forEach(link => {
  link.addEventListener("click", () => {
    mobileNav.classList.remove("open");
    menuBtn.setAttribute("aria-expanded", "false");
    menuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
  });
});

const sr = ScrollReveal({
  distance: '40px',
  duration: 800,
  easing: 'ease-out',
  reset: false,
  viewFactor: 0.12,
  origin: 'bottom'
});

sr.pms-reveal('.pms-reveal');
sr.pms-reveal('.pms-delay-1', { delay: 150 });
sr.pms-reveal('.pms-delay-2', { delay: 300 });

window.addEventListener("scroll", () => {
  toTop.classList.toggle("pms-show", window.scrollY > 500);
});

toTop?.addEventListener("click", () => window.scrollTo({top: 0, behavior: "smooth"}));

newsletterForm?.addEventListener("submit", e => {
  e.preventDefault();
  formMsg.textContent = "Thanks! You're subscribed.";
  newsletterForm.reset();
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", e => {
    const id = anchor.getAttribute("href");
    if (id && id !== "#") {
      const target = document.querySelector(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({behavior: "smooth", block: "start"});
      }
    }
  });
});
