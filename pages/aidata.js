// Lightweight interactions: reveal-on-scroll + subtle hover/tilt for the data card.
const revealItems = document.querySelectorAll(
  '.aidata-problem-card, .aidata-solution-row, .aidata-story-copy, .aidata-story-visual, .aidata-timeline article, .aidata-cta'
);

const observer = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('aidata-is-visible');
      observer.unobserve(entry.target);
    }
  });
},{threshold:.12});

revealItems.forEach((el,i)=>{
  el.classList.add('aidata-reveal');
  el.style.transitionDelay = `${Math.min(i * 45, 220)}ms`;
  observer.observe(el);
});

const card = document.querySelector('.aidata-data-card');
if(card && window.matchMedia('(pointer:fine)').matches){
  card.addEventListener('mousemove',(e)=>{
    const r=card.getBoundingClientRect();
    const x=(e.clientX-r.left)/r.width-.5;
    const y=(e.clientY-r.top)/r.height-.5;
    card.style.transform=`rotateX(${y*-3}deg) rotateY(${x*4}deg) rotateZ(-2deg)`;
  });
  card.addEventListener('mouseleave',()=>card.style.transform='rotateZ(-2deg)');
}
