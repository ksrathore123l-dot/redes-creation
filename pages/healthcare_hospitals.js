const p = document.querySelector(".hc-progress");
window.addEventListener("scroll", () => {
  const m = document.documentElement.scrollHeight - innerHeight;
  p.style.width = (scrollY / m) * 100 + "%";
});
const ob = new IntersectionObserver(
  (es) =>
    es.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("hc-show");
        
        if (e.target.classList.contains("hc-metrics")) {
          const counters = e.target.querySelectorAll('.hc-counter');
          counters.forEach(counter => {
            const targetStr = counter.getAttribute('data-target');
            if (!targetStr) return;
            const target = parseFloat(targetStr);
            const isFloat = targetStr.includes('.');
            let count = 0;
            const inc = target / 100;
            
            const updateCount = () => {
              if (count < target) {
                count += inc;
                if (count > target) count = target;
                counter.textContent = isFloat ? count.toFixed(1) : Math.floor(count);
                requestAnimationFrame(updateCount);
              } else {
                counter.textContent = target;
              }
            };
            
            updateCount();
          });
        }
        
        ob.unobserve(e.target);
      }
    }),
  { threshold: 0.12 },
);
document.querySelectorAll(".hc-reveal").forEach((x) => ob.observe(x));
document.querySelector(".hamb")?.addEventListener("click", () => {
  const n = document.querySelector("nav");
  n.style.display = n.style.display === "flex" ? "none" : "flex";
  n.style.position = "absolute";
  n.style.top = "65px";
  n.style.left = "15px";
  n.style.right = "15px";
  n.style.padding = "18px";
  n.style.background = "#05285b";
  n.style.borderRadius = "14px";
  n.style.flexDirection = "column";
});
const yearElem = document.getElementById("year");
if (yearElem) yearElem.textContent = new Date().getFullYear();


// Auto typing effect for Hero Section
const words = ["Hospitals", "Clinics", "Institutions", "Care Centers"];
let i = 0;
let timer;
const typingText = document.querySelector('.hc-typing-text');

if (typingText) {
  function typingEffect() {
    let word = words[i].split("");
    typingText.textContent = "";
    var loopTyping = function() {
      if (word.length > 0) {
        typingText.textContent += word.shift();
      } else {
        setTimeout(deletingEffect, 2000);
        return false;
      }
      timer = setTimeout(loopTyping, 100);
    };
    loopTyping();
  }

  function deletingEffect() {
    let word = words[i].split("");
    var loopDeleting = function() {
      if (word.length > 0) {
        word.pop();
        typingText.textContent = word.join("");
      } else {
        if (words.length > (i + 1)) {
          i++;
        } else {
          i = 0;
        }
        setTimeout(typingEffect, 500);
        return false;
      }
      timer = setTimeout(loopDeleting, 50);
    };
    loopDeleting();
  }

  typingText.textContent = "";
  typingEffect();
}
