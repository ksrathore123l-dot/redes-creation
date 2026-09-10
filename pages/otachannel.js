const menu = document.querySelector('.menu'),
    nav = document.querySelector('nav');
menu?.addEventListener('click', () => document.querySelector('.nav').classList.toggle('open'));
document.querySelectorAll('nav a').forEach(a => a.addEventListener('click', () => document.querySelector('.nav').classList.remove('open'))); const io = new IntersectionObserver(es => es.forEach(e => {
    if (e.isIntersecting) {
        e.target.style.opacity = 1;
        e.target.style.transform = 'none'; io.unobserve(e.target)
    }
}),
    { threshold: .08 });
document.querySelectorAll('.rc-ota-general-section,.rc-ota-trust-banner,.rc-ota-cta-container,footer').forEach(e => { e.style.opacity = 0; e.style.transform = 'translateY(18px)'; e.style.transition = 'opacity .6s ease,transform .6s ease'; 
    io.observe(e) });
document.querySelector('form')?.addEventListener('submit', e => { e.preventDefault(); const b = e.target.querySelector('button'); b.textContent = 'Subscribed ✓'; 
    setTimeout(() => b.textContent = 'Subscribe', 2200) });