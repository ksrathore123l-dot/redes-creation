document.addEventListener("DOMContentLoaded", () => {
  const b = document.querySelector(".rca-menu-trigger"),
    n = document.querySelector(".rca-nav");
  b?.addEventListener("click", () => {
    const o = n.classList.toggle("rca-open");
    b.setAttribute("aria-expanded", o);
  });
  n?.querySelectorAll("a").forEach((a) =>
    a.addEventListener("click", () => {
      n.classList.remove("rca-open");
      b?.setAttribute("aria-expanded", "false");
    }),
  );
  const q = document.querySelector(".rca-quote-text"),
    s = [
      "Redes Creation transformed our website into a complete accreditation platform. The structured SSR and easy upload system saved months of effort during our NAAC process.",
      "The new digital framework made document discovery, department updates and audit preparation much easier for our academic team.",
      "A clean, structured and mobile-ready platform helped us present our institutional information with much greater confidence.",
    ];
  let i = 0;
  document.querySelectorAll(".rca-slide-btn").forEach((x) =>
    x.addEventListener("click", () => {
      i = (i + Number(x.dataset.dir) + s.length) % s.length;
      q.style.opacity = 0;
      setTimeout(() => {
        q.textContent = s[i];
        q.style.opacity = 1;
      }, 160);
    }),
  );
  const o = new IntersectionObserver(
    (es) =>
      es.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add("rca-visible");
          o.unobserve(e.target);
          if (e.target.classList.contains("rca-stats")) {
            e.target.querySelectorAll("b").forEach((b) => {
              const text = b.textContent;
              const targetNum = parseInt(text.replace(/[^0-9]/g, ""), 10);
              if (isNaN(targetNum)) return;
              const suffix = text.replace(/[0-9]/g, "");
              let startTime = null;
              const duration = 1500;
              const step = (timestamp) => {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const currentNum = Math.floor(progress * (2 - progress) * targetNum);
                b.textContent = currentNum + suffix;
                if (progress < 1) window.requestAnimationFrame(step);
                else b.textContent = targetNum + suffix;
              };
              window.requestAnimationFrame(step);
            });
          }
        }
      }),
    { threshold: 0.12 },
  );
  document
    .querySelectorAll(
      ".rca-problem,.rca-feature-grid article,.rca-compare,.rca-process-line article,.rca-testimonial,.rca-stats,.rca-cta",
    )
    .forEach((e) => {
      e.style.transition = "opacity .55s ease,transform .55s ease";
      e.style.opacity = 0;
      e.style.transform = "translateY(18px)";
      o.observe(e);
    });
  const st = document.createElement("style");
  st.textContent =
    ".rca-visible{opacity:1!important;transform:translateY(0)!important}.rca-quote-text{transition:opacity .16s ease}";
  document.head.appendChild(st);
});
