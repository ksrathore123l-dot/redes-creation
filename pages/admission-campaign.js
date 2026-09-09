const revealObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("ac-visible");
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.12 },
);
document
  .querySelectorAll(".ac-reveal")
  .forEach((el) => revealObserver.observe(el));

const counters = document.querySelectorAll("[data-count]");
const counterObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const el = entry.target,
        target = Number(el.dataset.count),
        duration = 1300;
      const start = performance.now();
      const tick = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(target * eased);
        if (progress < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
      counterObserver.unobserve(el);
    });
  },
  { threshold: 0.7 },
);
counters.forEach((el) => counterObserver.observe(el));

document.querySelectorAll('a[href^="#"]').forEach((link) =>
  link.addEventListener("click", (e) => {
    const target = document.querySelector(link.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  }),
);

// 3D Card Hover Effect
document.querySelectorAll(".ac-service-card").forEach((card) => {
  // Add base styles after reveal animation
  setTimeout(() => {
    card.style.transformStyle = "preserve-3d";
    card.style.borderRadius = "16px";
    card.style.backgroundColor = "#fff";
  }, 1000);

  card.addEventListener("mousemove", (e) => {
    if (!card.classList.contains("ac-visible")) return;

    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * -15;
    const rotateY = ((x - centerX) / centerX) * 15;

    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
    card.style.transition = "none";
    card.style.boxShadow = "0 20px 40px rgba(8, 104, 223, 0.15)";
    card.style.zIndex = "10";

    // Add 3D effect to icon
    const icon = card.querySelector(".ac-icon");
    if (icon) {
      icon.style.transform = "translateZ(30px)";
      icon.style.transition = "none";
    }
  });

  card.addEventListener("mouseleave", () => {
    if (!card.classList.contains("ac-visible")) return;

    card.style.transform =
      "perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)";
    card.style.transition = "transform 0.5s ease, box-shadow 0.5s ease";
    card.style.boxShadow = "none";
    card.style.zIndex = "1";

    const icon = card.querySelector(".ac-icon");
    if (icon) {
      icon.style.transform = "translateZ(0px)";
      icon.style.transition = "transform 0.5s ease";
    }
  });
});

// Auto Typing Effect for Hero Heading
document.addEventListener("DOMContentLoaded", () => {
  const heading = document.querySelector(".ac-hero h1");
  if (!heading) return;

  const parts = [
    { text: "Digital Marketing & ", tag: "text" },
    { tag: "br" },
    { text: "Admission Campaigns", tag: "span" },
  ];

  heading.innerHTML = "";
  heading.classList.add("typing-active");

  let partIndex = 0;
  let charIndex = 0;
  let currentElement = heading;

  function typeWriter() {
    if (partIndex >= parts.length) {
      heading.classList.remove("typing-active");
      heading.classList.add("typing-done");
      return;
    }

    const part = parts[partIndex];

    if (part.tag === "br") {
      heading.appendChild(document.createElement("br"));
      partIndex++;
      setTimeout(typeWriter, 150);
      return;
    }

    if (charIndex === 0 && part.tag === "span") {
      const span = document.createElement("span");
      heading.appendChild(span);
      currentElement = span;
    }

    if (charIndex < part.text.length) {
      currentElement.innerHTML += part.text.charAt(charIndex);
      charIndex++;
      setTimeout(typeWriter, 60);
    } else {
      partIndex++;
      charIndex = 0;
      currentElement = heading;
      setTimeout(typeWriter, 100);
    }
  }

  setTimeout(typeWriter, 500);
});

