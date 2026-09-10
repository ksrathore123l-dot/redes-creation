/**
 * Redes Creation - QR Code Menus & Contactless Dining
 * Interactive JavaScript functionality
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Header & Active Nav Link Tracking
  const header = document.getElementById('header');
  const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
  const sections = document.querySelectorAll('section[id], .hero-section, .hero-visual');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 30) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    // Update active nav link based on scroll position
    let currentSectionId = '';
    const scrollPosition = window.scrollY + 100;

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        currentSectionId = section.getAttribute('id');
      }
    });

    if (currentSectionId) {
      navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === `#${currentSectionId}`) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
    }
  });

  // 2. Mobile Drawer Navigation Toggle
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  if (mobileMenuToggle && mobileDrawer) {
    mobileMenuToggle.addEventListener('click', () => {
      const isOpen = mobileDrawer.classList.contains('open');
      mobileDrawer.classList.toggle('open');
      mobileMenuToggle.classList.toggle('active');
      mobileMenuToggle.setAttribute('aria-expanded', !isOpen);
    });

    mobileLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileDrawer.classList.remove('open');
        mobileMenuToggle.classList.remove('active');
        mobileMenuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // 3. Animated Metrics Counter (Intersection Observer)
  const statNumbers = document.querySelectorAll('.stat-number');
  let animatedStats = false;

  const animateCounter = (el) => {
    const target = parseInt(el.getAttribute('data-target'), 10);
    const suffix = el.getAttribute('data-suffix') || '';
    const prefix = el.getAttribute('data-prefix') || '';
    const duration = 1800; // ms
    const stepTime = 20;
    const steps = duration / stepTime;
    const increment = target / steps;
    let current = 0;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        el.textContent = `${prefix}${target}${suffix}`;
        clearInterval(timer);
      } else {
        el.textContent = `${prefix}${Math.floor(current)}${suffix}`;
      }
    }, stepTime);
  };

  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !animatedStats) {
        animatedStats = true;
        statNumbers.forEach(num => animateCounter(num));
      }
    });
  }, { threshold: 0.3 });

  const statsSection = document.querySelector('.stats-section');
  if (statsSection) {
    statsObserver.observe(statsSection);
  }

  // 4. Feature Pills Interaction in "Why QR Menus?"
  const featurePills = document.querySelectorAll('.feature-pill');
  featurePills.forEach(pill => {
    pill.addEventListener('click', () => {
      featurePills.forEach(p => p.classList.remove('active'));
      pill.classList.add('active');
      
      const feature = pill.getAttribute('data-feature');
      const featureNames = {
        'digital-menu': 'Digital Menu view selected',
        'live-updates': 'Live instant menu updates enabled',
        'special-offers': 'Today’s Special promotional view',
        'multi-language': 'Multi-Language menu switch activated',
        'analytics': 'Real-time order & scan analytics active'
      };

      showToast('Feature Preview', featureNames[feature] || 'Interactive feature updated');
    });
  });

  // 5. Toast Notification System
  const toast = document.getElementById('toastNotification');
  const toastTitle = document.getElementById('toastTitle');
  const toastBody = document.getElementById('toastBody');
  let toastTimer = null;

  function showToast(title, body) {
    if (!toast) return;
    if (toastTitle) toastTitle.textContent = title;
    if (toastBody) toastBody.textContent = body;

    toast.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
      toast.classList.remove('show');
    }, 3500);
  }

  // 6. Interactive "Add to Order" Hotspot
  const orderDemoBtn = document.getElementById('orderDemoBtn');
  let orderCount = 0;
  if (orderDemoBtn) {
    orderDemoBtn.addEventListener('click', () => {
      orderCount++;
      showToast('Added to Cart! (Demo)', `Grilled Paneer with Herbs (Qty: ${orderCount}) added to your digital ticket.`);
    });
  }

  // 7. Consultation Modal Handling
  const consultationModal = document.getElementById('consultationModal');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const consultationTriggers = document.querySelectorAll('.consultation-trigger');
  const consultationForm = document.getElementById('consultationForm');

  const openConsultationModal = () => {
    if (consultationModal) {
      consultationModal.classList.add('active');
      document.body.style.overflow = 'hidden';
      // Auto focus first input
      setTimeout(() => {
        const firstInput = consultationModal.querySelector('input');
        if (firstInput) firstInput.focus();
      }, 100);
    }
  };

  const closeConsultationModal = () => {
    if (consultationModal) {
      consultationModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  };

  consultationTriggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openConsultationModal();
    });
  });

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeConsultationModal);
  }

  if (consultationForm) {
    consultationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const restaurantName = document.getElementById('restaurantName')?.value || 'Your Restaurant';
      closeConsultationModal();
      consultationForm.reset();
      showToast('Consultation Requested! 🎉', `Thank you! Our QR menu team will contact ${restaurantName} shortly.`);
    });
  }

  // 8. Video Modal Handling
  const videoModal = document.getElementById('videoModal');
  const watchVideoBtn = document.getElementById('watchVideoBtn');
  const videoModalCloseBtn = document.getElementById('videoModalCloseBtn');

  const openVideoModal = () => {
    if (videoModal) {
      videoModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  };

  const closeVideoModal = () => {
    if (videoModal) {
      videoModal.classList.remove('active');
      document.body.style.overflow = '';
    }
  };

  if (watchVideoBtn) {
    watchVideoBtn.addEventListener('click', openVideoModal);
  }

  if (videoModalCloseBtn) {
    videoModalCloseBtn.addEventListener('click', closeVideoModal);
  }

  // Close modals on clicking outside or ESC key
  window.addEventListener('click', (e) => {
    if (e.target === consultationModal) closeConsultationModal();
    if (e.target === videoModal) closeVideoModal();
  });

  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeConsultationModal();
      closeVideoModal();
    }
  });
});
