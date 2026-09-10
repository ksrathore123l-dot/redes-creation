document.addEventListener("DOMContentLoaded", () => {
  const menu = document.getElementById("rcmMenu");
  const nav = document.getElementById("rcmNav");

  menu?.addEventListener("click", () => {
    const open = nav.classList.toggle("rcm-open");
    menu.setAttribute("aria-expanded", String(open));
    menu.innerHTML = open
      ? '<i class="fa-solid fa-xmark"></i>'
      : '<i class="fa-solid fa-bars"></i>';
  });

  nav?.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      nav.classList.remove("rcm-open");
      menu?.setAttribute("aria-expanded", "false");
      if (menu) menu.innerHTML = '<i class="fa-solid fa-bars"></i>';
    });
  });

  // Lightweight reveal animation
  const revealItems = document.querySelectorAll(".reveal");

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('active');
      obs.unobserve(entry.target);
    });
  }, { threshold: 0.12 });

  revealItems.forEach(item => {
    observer.observe(item);
  });

  // Animated metrics
  const counters = document.querySelectorAll("[data-count]");
  const counterObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      const el = entry.target;
      const target = Number(el.dataset.count);
      const suffix = target === 24 ? "/7" : target === 360 ? "°" : "+";
      let current = 0;
      const duration = 1000;
      const start = performance.now();

      const tick = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        current = Math.round(target * eased);
        el.textContent = current + suffix;
        if (progress < 1) requestAnimationFrame(tick);
      };

      requestAnimationFrame(tick);
      obs.unobserve(el);
    });
  }, { threshold: 0.6 });

  counters.forEach(counter => counterObserver.observe(counter));
});
