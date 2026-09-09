const menu = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav');
if (menu) {
    menu.addEventListener('click', () => {
        const open = nav.classList.toggle('open');
        menu.setAttribute('aria-expanded', open)
    })
} document.querySelectorAll('.nav a').forEach(a => a.addEventListener('click', () => nav.classList.remove('open')));

const observer = new IntersectionObserver(entries => entries.forEach(e => { 
    if (e.isIntersecting) {
        e.target.classList.add('visible');
        if (e.target.classList.contains('bw-stats')) {
            startCounters();
        }
    } 
}), { threshold: .12 });

let countersStarted = false;
function startCounters() {
    if (countersStarted) return;
    countersStarted = true;
    const counters = document.querySelectorAll('.bw-counter');
    const speed = 200;
    
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
}
document.querySelectorAll('.bw-reveal').forEach(el => observer.observe(el));
document.querySelectorAll('a[href^="#"]').forEach(a => a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' })
    }
}));
