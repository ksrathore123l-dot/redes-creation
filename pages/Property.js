document.querySelectorAll('a[href^="#"]').forEach(link=>{
  link.addEventListener('click',e=>{
    const id=link.getAttribute('href');
    if(id && id!=='#'){
      const el=document.querySelector(id);
      if(el){e.preventDefault();el.scrollIntoView({behavior:'smooth'});}
    }
  });
});
document.querySelector('.re-menu-btn')?.addEventListener('click',()=>{
  document.querySelector('.re-nav')?.classList.toggle('re-mobile-open');
});

// Countdown animation for stats
const statsSection = document.getElementById('stats-section');
const counters = document.querySelectorAll('.re-counter');
let countersStarted = false;

if (statsSection) {
  const statsObserver = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting && !countersStarted) {
      countersStarted = true;
      counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // ~60 FPS
        let current = 0;

        const updateCounter = () => {
          current += increment;
          if (current < target) {
            counter.innerText = Math.ceil(current);
            requestAnimationFrame(updateCounter);
          } else {
            counter.innerText = target;
          }
        };
        updateCounter();
      });
    }
  }, { threshold: 0.5 });

  statsObserver.observe(statsSection);
}
