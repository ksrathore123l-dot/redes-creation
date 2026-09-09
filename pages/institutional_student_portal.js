const menu = document.querySelector(".rc-menu");
const links = document.querySelector(".rc-links");
menu?.addEventListener("click", () => {
  links.classList.toggle("open");
  menu.innerHTML = links.classList.contains("open")
    ? '<i class="icon icon-x"></i>'
    : '<i class="icon icon-menu"></i>';
});
document.querySelectorAll(".rc-links a").forEach(a => a.addEventListener("click", () => {
  links.classList.remove("open");
  menu.innerHTML = '<i class="icon icon-menu"></i>';
}));

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      entry.target.style.transitionDelay = `${Math.min(i * 45, 180)}ms`;
      entry.target.classList.add("visible");
      observer.unobserve(entry.target);
    }
  });
}, {threshold: 0.12});
document.querySelectorAll(".reveal").forEach(el => observer.observe(el));

document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener("click", e => {
    const id = link.getAttribute("href");
    if (id && id !== "#") {
      const target = document.querySelector(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({behavior:"smooth", block:"start"});
      }
    }
  });
});

// Auto-counting for numbers in .rc-trust
const counterObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const counters = entry.target.querySelectorAll('.counter');
      counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const duration = 2000;
        const startTime = performance.now();
        
        const updateCounter = (currentTime) => {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          // easeOutQuad
          const easeProgress = progress * (2 - progress);
          
          counter.innerText = Math.round(easeProgress * target);
          
          if (progress < 1) {
            requestAnimationFrame(updateCounter);
          } else {
            counter.innerText = target;
          }
        };
        requestAnimationFrame(updateCounter);
      });
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

const trustSection = document.querySelector('.rc-trust');
if (trustSection) {
  counterObserver.observe(trustSection);
}
