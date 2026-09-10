document.addEventListener('DOMContentLoaded', () => { 
    const els = document.querySelectorAll('.cd-services-grid article,.cd-steps article,.cd-tech-grid span,.cd-case-img,.cd-metrics,.cd-cta ul'); 
    const io = new IntersectionObserver(entries => entries.forEach(e => { if (e.isIntersecting) { 
        e.target.classList.add('cd-show'); 
        io.unobserve(e.target) } }), 
        { threshold: .12 });
         els.forEach((e, i) => 
            { e.style.transitionDelay = Math.min(i * 35, 220) + 'ms'; io.observe(e) }) });
