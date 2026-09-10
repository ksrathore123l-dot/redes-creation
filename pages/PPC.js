document.addEventListener('DOMContentLoaded', () => {
    // Select the main elements to animate
    const elementsToAnimate = document.querySelectorAll(
        '.ppc-hero-content, .ppc-hero-image-wrapper, .ppc-hero-visual-wrapper, .ppc-why-choose-content, .ppc-card, .ppc-platforms-banner, .ppc-process-step, .ppc-results-left, .ppc-results-right, .ppc-cta-banner-container, .ppc-platform-card, .ppc-result-card'
    );

    // Add base class
    elementsToAnimate.forEach((el) => {
        el.classList.add('ppc-animate-on-scroll');
    });

    // Staggered delays for groups of elements
    document.querySelectorAll('.ppc-why-choose-cards .ppc-card').forEach((el, index) => {
        el.style.transitionDelay = `${index * 150}ms`;
    });
    
    document.querySelectorAll('.ppc-platforms-cards .ppc-platform-card').forEach((el, index) => {
        el.style.transitionDelay = `${index * 100}ms`;
    });
    
    document.querySelectorAll('.ppc-process-timeline .ppc-process-step').forEach((el, index) => {
        el.style.transitionDelay = `${index * 100}ms`;
    });

    document.querySelectorAll('.ppc-results-cards .ppc-result-card').forEach((el, index) => {
        el.style.transitionDelay = `${index * 150}ms`;
    });

    // Interaction Observer for scroll animation
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); // Trigger only once
            }
        });
    }, observerOptions);

    // Start observing
    elementsToAnimate.forEach(el => observer.observe(el));
});
