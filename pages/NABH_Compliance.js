const menuBtn = document.querySelector(".menu-btn");
const mobileNav = document.querySelector(".mobile-nav");
menuBtn?.addEventListener("click", () => mobileNav.classList.toggle("open"));

document.querySelectorAll(".mobile-nav a").forEach((a) => {
  a.addEventListener("click", () => mobileNav.classList.remove("open"));
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.12 },
);

document.querySelectorAll(".reveal, .reveal-left").forEach((el) => observer.observe(el));

document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener("click", (e) => {
    const target = document.querySelector(link.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});

// Auto counting effect
const statsObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll('.count-up');
        counters.forEach(counter => {
          const target = parseFloat(counter.getAttribute('data-target'));
          const suffix = counter.getAttribute('data-suffix') || '';
          const decimals = parseInt(counter.getAttribute('data-decimals')) || 0;
          const duration = 2000; // 2 seconds
          const frameRate = 30; // ms per frame
          const totalFrames = Math.round(duration / frameRate);
          let frame = 0;

          // Easing function for smoother animation (easeOutQuart)
          const easeOut = (t) => 1 - Math.pow(1 - t, 4);

          const counterInterval = setInterval(() => {
            frame++;
            const progress = easeOut(frame / totalFrames);
            const current = target * progress;
            
            if (frame >= totalFrames) {
              counter.innerText = target.toFixed(decimals) + suffix;
              clearInterval(counterInterval);
            } else {
              counter.innerText = current.toFixed(decimals) + suffix;
            }
          }, frameRate);
        });
        statsObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.3 }
);

const statsSection = document.querySelector('.stats');
if (statsSection) {
  statsObserver.observe(statsSection);
}

// Typing effect for Hero Title
document.addEventListener("DOMContentLoaded", () => {
  const heading = document.querySelector(".hero-copy h1");
  if (!heading) return;

  const parts = [
    { text: "NABH Compliance-", tag: null },
    { text: "Ready Website", tag: "span" }
  ];

  heading.innerHTML = "";
  heading.classList.add("typing-active");

  let partIndex = 0;
  let charIndex = 0;
  let currentElement = heading;

  function typeText() {
    if (partIndex >= parts.length) {
      heading.classList.remove("typing-active");
      heading.classList.add("typing-done");
      return;
    }

    const part = parts[partIndex];

    if (charIndex === 0 && part.tag) {
      const el = document.createElement(part.tag);
      heading.appendChild(el);
      currentElement = el;
    } else if (charIndex === 0 && !part.tag) {
      const el = document.createTextNode("");
      heading.appendChild(el);
      currentElement = el;
    }

    if (charIndex < part.text.length) {
      if (currentElement.nodeType === Node.TEXT_NODE) {
        currentElement.nodeValue += part.text.charAt(charIndex);
      } else {
        currentElement.innerHTML += part.text.charAt(charIndex);
      }
      charIndex++;
      setTimeout(typeText, 70); // Typing speed
    } else {
      partIndex++;
      charIndex = 0;
      setTimeout(typeText, 50); // Pause between parts
    }
  }

  // Start typing after a short delay
  setTimeout(typeText, 400);
});
