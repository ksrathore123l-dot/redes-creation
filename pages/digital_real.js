document.addEventListener('DOMContentLoaded', () => {
    // Elements to animate on scroll
    const revealElements = document.querySelectorAll('.service-card, .testi-card, .step, .feature-item, .hero-left, .choose-us-left, .brands-logos .logo, .stat-item');
    
    // Add base reveal class
    revealElements.forEach((el, index) => {
        el.classList.add('reveal');
        // Optional stagger effect based on horizontal position or order
        if(el.classList.contains('service-card') || el.classList.contains('logo') || el.classList.contains('step') || el.classList.contains('stat-item') || el.classList.contains('testi-card')) {
             el.style.transitionDelay = `${(index % 4) * 0.1}s`;
        }
    });

    const revealOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const revealOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, revealOptions);

    revealElements.forEach(el => {
        revealOnScroll.observe(el);
    });
});
