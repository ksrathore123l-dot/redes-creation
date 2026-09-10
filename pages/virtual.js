document.addEventListener('DOMContentLoaded', () => {
    // Feature Tabs
    const tabs = document.querySelectorAll('.f-tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });

    // Advanced Scroll Animation
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Unobserve so animation only happens once
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Select elements to animate across the page
    const elementsToAnimate = [
        ...document.querySelectorAll('section h2, .section-subtitle'),
        ...document.querySelectorAll('section > .container > p, .services-header p, .why-us-header p, .test-header p'),
        ...document.querySelectorAll('.service-card'),
        ...document.querySelectorAll('.stat-box'),
        ...document.querySelectorAll('.step'),
        ...document.querySelectorAll('.testimonial-card'),
        ...document.querySelectorAll('.trusted-item'),
        ...document.querySelectorAll('.feature-list li'),
        ...document.querySelectorAll('.floating-card'),
        ...document.querySelectorAll('.hero-features-bottom .hf-item'),
        ...document.querySelectorAll('.device-laptop, .device-mobile, .floating-floor-plan, .hero-image-simple')
    ];

    elementsToAnimate.forEach((el) => {
        el.classList.add('animate-on-scroll');
        
        // Add staggered delay to grid/flex siblings to make them appear one by one
        const parent = el.parentElement;
        if (parent) {
            const siblings = Array.from(parent.children).filter(child => elementsToAnimate.includes(child));
            const siblingIndex = siblings.indexOf(el);
            if(siblingIndex === 1) el.classList.add('delay-100');
            if(siblingIndex === 2) el.classList.add('delay-200');
            if(siblingIndex === 3) el.classList.add('delay-300');
            if(siblingIndex >= 4) el.classList.add('delay-400');
        }
        
        observer.observe(el);
    });
});
