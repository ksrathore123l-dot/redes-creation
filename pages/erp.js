const menu = document.querySelector(".erp-menu"),
  links = document.querySelector(".erp-links");
menu?.addEventListener("click", () => links.classList.toggle("open"));
document
  .querySelectorAll(".erp-links a")
  .forEach((a) =>
    a.addEventListener("click", () => links.classList.remove("open")),
  );
const form = document.getElementById("erpEstimator"),
  out = document.getElementById("estimateResult");
form?.addEventListener("submit", (e) => {
  e.preventDefault();
  const industry = document.getElementById("industry").value;
  const team = document.getElementById("team").value;
  let total = 49999;
  document
    .querySelectorAll("#erpEstimator input:checked")
    .forEach((x) => (total += Number(x.value)));
  const teamAdd =
    {
      "1-10 Users": 0,
      "11-50 Users": 25000,
      "51-200 Users": 65000,
      "200+ Users": 120000,
    }[team] || 0;
  total += teamAdd;
  out.textContent = `Estimated starting budget for ${industry}: ₹${total.toLocaleString("en-IN")}`;
});

const statNumbers = document.querySelectorAll(".stat-number");
let hasCounted = false;

const startCounting = () => {
  if (hasCounted) return;
  hasCounted = true;
  
  statNumbers.forEach(stat => {
    const target = parseInt(stat.getAttribute("data-target"));
    const duration = 2000;
    const increment = target / (duration / 16);
    
    let current = 0;
    const updateCount = () => {
      current += increment;
      if (current < target) {
        stat.innerText = Math.ceil(current) + "+";
        requestAnimationFrame(updateCount);
      } else {
        stat.innerText = target + "+";
      }
    };
    updateCount();
  });
};

const statsObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startCounting();
    }
  });
});

const statsSection = document.querySelector(".erp-stats");
if (statsSection) {
  statsObserver.observe(statsSection);
}
