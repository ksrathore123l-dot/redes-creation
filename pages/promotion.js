document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
    
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenuOverlay.classList.toggle('active');
        const icon = mobileMenuBtn.querySelector('i');
        if(mobileMenuOverlay.classList.contains('active')) {
            icon.classList.remove('ph-list');
            icon.classList.add('ph-x');
        } else {
            icon.classList.remove('ph-x');
            icon.classList.add('ph-list');
        }
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenuOverlay.classList.remove('active');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('ph-x');
            icon.classList.add('ph-list');
        });
    });

    // Smooth Scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                const navHeight = document.querySelector('.navbar').offsetHeight;
                window.scrollTo({
                    top: targetElement.offsetTop - navHeight,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Modal Logic
    const videoModal = document.getElementById('videoModal');
    const contactModal = document.getElementById('contactModal');
    
    const btnVideo = document.querySelector('.btn-video');
    const btnsContact = document.querySelectorAll('.btn-contact');
    
    const closeBtns = document.querySelectorAll('.close-modal');

    // Open Video Modal
    if(btnVideo) {
        btnVideo.addEventListener('click', () => {
            videoModal.style.display = 'flex';
        });
    }

    // Open Contact Modal
    btnsContact.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            contactModal.style.display = 'flex';
        });
    });

    // Close Modals
    closeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.modal').style.display = 'none';
        });
    });

    // Close Modal on outside click
    window.addEventListener('click', (e) => {
        if (e.target === videoModal) {
            videoModal.style.display = 'none';
        }
        if (e.target === contactModal) {
            contactModal.style.display = 'none';
        }
    });

    // Form submission handling
    const contactForm = document.getElementById('contactForm');
    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Basic validation is handled by HTML5 'required' attribute
            // Here we would normally send the data to a server
            
            const btn = contactForm.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            
            btn.innerHTML = '<i class="ph ph-spinner ph-spin"></i> Sending...';
            btn.style.opacity = '0.8';
            
            // Simulate network request
            setTimeout(() => {
                btn.innerHTML = '<i class="ph ph-check"></i> Request Sent!';
                btn.style.backgroundColor = '#10b981';
                
                setTimeout(() => {
                    contactModal.style.display = 'none';
                    contactForm.reset();
                    btn.innerHTML = originalText;
                    btn.style.backgroundColor = '';
                    btn.style.opacity = '1';
                }, 2000);
            }, 1500);
        });
    }

    // Scroll Animation Logic
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };
    
    const revealOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('active');
                
                // Counter animation
                const statNum = entry.target.querySelector('.stat-num');
                if(statNum && !statNum.classList.contains('counted')) {
                    statNum.classList.add('counted');
                    const target = parseInt(statNum.getAttribute('data-target'));
                    if(target) {
                        const suffix = statNum.getAttribute('data-suffix') || '';
                        let current = 0;
                        const duration = 2000; // 2 seconds
                        const interval = 40; // 40ms updates
                        const increment = Math.ceil(target / (duration / interval)); 
                        
                        const timer = setInterval(() => {
                            current += increment;
                            if(current >= target) {
                                statNum.innerText = target + suffix;
                                clearInterval(timer);
                            } else {
                                statNum.innerText = current + suffix;
                            }
                        }, interval); 
                    }
                }
                
                observer.unobserve(entry.target); // Stop observing once revealed
            }
        });
    }, revealOptions);
    
    revealElements.forEach(el => {
        revealOnScroll.observe(el);
    });
});