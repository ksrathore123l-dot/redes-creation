const menu = document.querySelector('.re-menu');
const links = document.querySelector('.re-links');
const topBtn = document.querySelector('.re-top');

menu?.addEventListener('click', () => {
  links.classList.toggle('re-open');
});

document.querySelectorAll('.re-links a').forEach(link => {
  link.addEventListener('click', () => links.classList.remove('re-open'));
});

window.addEventListener('scroll', () => {
  topBtn.classList.toggle('re-show', window.scrollY > 500);
});

topBtn.addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));

const observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.15
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

const revealElements = document.querySelectorAll(
  '.re-hero-copy, .re-hero-visual, .re-heading-row, .re-centered, .re-service-card, .re-growth > div > div:first-child, .re-growth-card, .re-process-card, .re-cta-inner > div, .re-case-grid article, .re-footer-grid > div'
);

revealElements.forEach((el, index) => {
  el.classList.add('reveal');
  // Stagger items slightly if they are siblings to create a wave effect
  el.style.animationDelay = `${(index % 4) * 0.1}s`;
  observer.observe(el);
});
