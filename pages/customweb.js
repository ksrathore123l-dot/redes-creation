document.addEventListener("DOMContentLoaded", () => {
  const menu = document.querySelector(".cwa-menu");
  const links = document.querySelector(".cwa-links");

  menu?.addEventListener("click", () => {
    const open = links.classList.toggle("cwa-open");
    menu.setAttribute("aria-expanded", open ? "true" : "false");
    menu.innerHTML = open
      ? '<i class="fa-solid fa-xmark"></i>'
      : '<i class="fa-solid fa-bars"></i>';
  });

  document.querySelectorAll(".cwa-links a").forEach(link => {
    link.addEventListener("click", () => {
      links.classList.remove("cwa-open");
      menu?.setAttribute("aria-expanded", "false");
      if (menu) menu.innerHTML = '<i class="fa-solid fa-bars"></i>';
    });
  });

  const revealItems = document.querySelectorAll(".cwa-reveal");
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        entry.target.style.transitionDelay = `${Math.min(index * 45, 220)}ms`;
        entry.target.classList.add("cwa-visible");
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealItems.forEach(el => observer.observe(el));

  // Small interactive tilt for desktop cards.
  if (window.matchMedia("(min-width: 900px)").matches) {
    document.querySelectorAll(".cwa-solution, .cwa-work-card").forEach(card => {
      card.addEventListener("mousemove", e => {
        const r = card.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width - .5;
        const y = (e.clientY - r.top) / r.height - .5;
        card.style.transform = `translateY(-7px) rotateX(${(-y * 2.2).toFixed(2)}deg) rotateY(${(x * 2.2).toFixed(2)}deg)`;
      });
      card.addEventListener("mouseleave", () => {
        card.style.transform = "";
      });
    });
  }
});
