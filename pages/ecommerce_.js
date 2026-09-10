const io = new IntersectionObserver(
  (es) =>
    es.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("show");
        io.unobserve(e.target);
      }
    }),
  { threshold: 0.12 },
);
document.querySelectorAll(".reveal").forEach((x) => io.observe(x));
const co = new IntersectionObserver(
  (es) =>
    es.forEach((e) => {
      if (!e.isIntersecting) return;
      const el = e.target,
        t = +el.dataset.n,
        s = performance.now(),
        d = 1000;
      function f(n) {
        const p = Math.min((n - s) / d, 1),
          v = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(t * v);
        if (p < 1) requestAnimationFrame(f);
      }
      requestAnimationFrame(f);
      co.unobserve(el);
    }),
  { threshold: 0.7 },
);
document.querySelectorAll("[data-n]").forEach((x) => co.observe(x));
