document.addEventListener('DOMContentLoaded', () => {
    
    // Intersection Observer for Scroll Animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15 // Trigger when 15% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('pm-is-visible');
                
                // Animate child elements with stagger
                const cards = entry.target.querySelectorAll('.pm-solution-card, .pm-project-card, .pm-step, .pm-stat-box');
                cards.forEach(card => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }
        });
    }, observerOptions);

    // Select all elements with the 'animate-on-scroll' class
    const animatedElements = document.querySelectorAll('.pm-animate-on-scroll');
    
    animatedElements.forEach(el => {
        // Initialize child elements for animation
        const cards = el.querySelectorAll('.pm-solution-card, .pm-project-card, .pm-step, .pm-stat-box');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = `opacity 0.6s ease ${index * 0.15 + 0.2}s, transform 0.6s ease ${index * 0.15 + 0.2}s`;
        });
        
        observer.observe(el);
    });

    // Simple interaction for buttons to prevent default jump (for demo purposes)
    const allLinks = document.querySelectorAll('a[href="#"]');
    allLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
        });
    });

    // Counter Animation
    const counters = document.querySelectorAll('.pm-counter');
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('pm-counted')) {
                entry.target.classList.add('pm-counted');
                const target = +entry.target.getAttribute('data-target');
                const duration = 2000; // 2 seconds
                
                // For numbers less than 10 (like 1M+), animate slightly slower per number
                const fps = 60;
                const totalFrames = duration / (1000 / fps);
                const increment = target / totalFrames;
                
                let current = 0;
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        entry.target.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        entry.target.innerText = target;
                    }
                };
                
                updateCounter();
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

});
