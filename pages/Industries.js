document.addEventListener("DOMContentLoaded", () => {
  const io = new IntersectionObserver(
    (es) =>
      es.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add("visible");
          io.unobserve(e.target);
        }
      }),
    { threshold: 0.12 },
  );
  document.querySelectorAll(".reveal").forEach((x) => io.observe(x));
  const ci = new IntersectionObserver(
    (es) =>
      es.forEach((e) => {
        if (!e.isIntersecting) return;
        const el = e.target,
          end = +el.dataset.n;
        let n = 0;
        const go = () => {
          n = Math.min(end, n + Math.max(1, Math.ceil(end / 40)));
          el.textContent = n + (end === 98 ? "%" : "+");
          if (n < end) requestAnimationFrame(go);
        };
        go();
        ci.unobserve(el);
      }),
    { threshold: 0.7 },
  );
  document.querySelectorAll("[data-n]").forEach((x) => ci.observe(x));
});
