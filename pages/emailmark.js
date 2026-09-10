/**
 * REDES CREATION - EMAIL MARKETING LANDING PAGE JAVASCRIPT
 * Handles mobile drawer, stats counter animation, testimonial carousel with touch swipe,
 * smooth scrolling, and interactive consultation/video modals.
 */

document.addEventListener('DOMContentLoaded', () => {
  // --- 1. Sticky Navigation & Header Elevation ---
  const siteHeader = document.getElementById('siteHeader');
  if (siteHeader) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        siteHeader.classList.add('scrolled');
      } else {
        siteHeader.classList.remove('scrolled');
      }
    }, { passive: true });
  }

  // --- 2. Mobile Navigation Drawer ---
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const mobileNavDrawer = document.getElementById('mobileNavDrawer');
  const mobileDrawerClose = document.getElementById('mobileDrawerClose');
  const mobileNavBackdrop = document.getElementById('mobileNavBackdrop');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

  function openMobileNav() {
    if (mobileNavDrawer && mobileNavBackdrop) {
      mobileNavDrawer.classList.add('open');
      mobileNavBackdrop.classList.add('open');
      document.body.style.overflow = 'hidden';
      if (mobileMenuToggle) {
        mobileMenuToggle.setAttribute('aria-expanded', 'true');
      }
    }
  }

  function closeMobileNav() {
    if (mobileNavDrawer && mobileNavBackdrop) {
      mobileNavDrawer.classList.remove('open');
      mobileNavBackdrop.classList.remove('open');
      document.body.style.overflow = '';
      if (mobileMenuToggle) {
        mobileMenuToggle.setAttribute('aria-expanded', 'false');
      }
    }
  }

  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', openMobileNav);
  }
  if (mobileDrawerClose) {
    mobileDrawerClose.addEventListener('click', closeMobileNav);
  }
  if (mobileNavBackdrop) {
    mobileNavBackdrop.addEventListener('click', closeMobileNav);
  }
  mobileNavLinks.forEach(link => {
    link.addEventListener('click', closeMobileNav);
  });

  // --- 3. Animated Stats Counter with IntersectionObserver ---
  const counterElements = document.querySelectorAll('.stat-counter-number');
  let animated = false;

  const animateCounters = () => {
    counterElements.forEach(el => {
      const target = parseFloat(el.getAttribute('data-target'));
      const suffix = el.getAttribute('data-suffix') || '';
      const duration = 1600; // ms
      const steps = 50;
      const stepTime = duration / steps;
      let current = 0;
      const increment = target / steps;

      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          el.textContent = Math.round(target) + suffix;
          clearInterval(timer);
        } else {
          el.textContent = Math.round(current) + suffix;
        }
      }, stepTime);
    });
  };

  if ('IntersectionObserver' in window && counterElements.length > 0) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !animated) {
          animated = true;
          animateCounters();
          obs.disconnect();
        }
      });
    }, { threshold: 0.15 });

    const statsSection = document.querySelector('.stats-banner-section');
    if (statsSection) {
      observer.observe(statsSection);
    }
  } else {
    animateCounters();
  }

  // --- 4. Testimonials Carousel Slider (with Touch Gestures) ---
  const slides = document.querySelectorAll('.testimonial-slide');
  const dots = document.querySelectorAll('.dot-indicator');
  const prevBtn = document.getElementById('prevTestimonialBtn');
  const nextBtn = document.getElementById('nextTestimonialBtn');
  const sliderFrame = document.querySelector('.testimonial-card-frame');
  let currentSlide = 0;
  const totalSlides = slides.length;
  let autoplayInterval;

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    currentSlide = (index + totalSlides) % totalSlides;
    if (slides[currentSlide]) {
      slides[currentSlide].classList.add('active');
    }
    if (dots[currentSlide]) {
      dots[currentSlide].classList.add('active');
    }
  }

  function nextSlide() {
    showSlide(currentSlide + 1);
  }

  function prevSlide() {
    showSlide(currentSlide - 1);
  }

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetAutoplay();
    });
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetAutoplay();
    });
  }

  dots.forEach(dot => {
    dot.addEventListener('click', (e) => {
      const idx = parseInt(e.target.getAttribute('data-index'));
      showSlide(idx);
      resetAutoplay();
    });
  });

  // Mobile Touch Swipe Handling
  if (sliderFrame) {
    let touchStartX = 0;
    let touchEndX = 0;

    sliderFrame.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    sliderFrame.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });

    function handleSwipe() {
      const swipeDistance = touchEndX - touchStartX;
      if (Math.abs(swipeDistance) > 40) {
        if (swipeDistance < 0) {
          nextSlide(); // Swiped left -> next
        } else {
          prevSlide(); // Swiped right -> prev
        }
        resetAutoplay();
      }
    }
  }

  function startAutoplay() {
    autoplayInterval = setInterval(nextSlide, 5000);
  }

  function resetAutoplay() {
    clearInterval(autoplayInterval);
    startAutoplay();
  }

  startAutoplay();

  const sliderWrapper = document.querySelector('.testimonial-slider-wrapper');
  if (sliderWrapper) {
    sliderWrapper.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
    sliderWrapper.addEventListener('mouseleave', startAutoplay);
  }

  // --- 5. Consultation Modal Popup Handling ---
  const consultationModal = document.getElementById('consultationModal');
  const openConsultationBtns = document.querySelectorAll('.open-consultation-btn');
  const closeConsultationBtn = document.getElementById('closeConsultationModal');
  const consultationForm = document.getElementById('consultationForm');
  const formSuccessState = document.getElementById('formSuccessState');
  const closeSuccessModalBtn = document.getElementById('closeSuccessModalBtn');

  function openConsultModal() {
    if (consultationModal) {
      consultationModal.classList.add('active');
      consultationModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      // Reset form view
      if (consultationForm) {
        consultationForm.style.display = 'block';
      }
      if (formSuccessState) {
        formSuccessState.classList.remove('active');
      }
    }
  }

  function closeConsultModal() {
    if (consultationModal) {
      consultationModal.classList.remove('active');
      consultationModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  }

  openConsultationBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openConsultModal();
    });
  });

  if (closeConsultationBtn) {
    closeConsultationBtn.addEventListener('click', closeConsultModal);
  }

  if (closeSuccessModalBtn) {
    closeSuccessModalBtn.addEventListener('click', closeConsultModal);
  }

  if (consultationModal) {
    consultationModal.addEventListener('click', (e) => {
      if (e.target === consultationModal) {
        closeConsultModal();
      }
    });
  }

  // Consultation Form Submission Simulation
  if (consultationForm) {
    consultationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = consultationForm.querySelector('.modal-submit-btn');
      if (!submitBtn) return;
      const originalText = submitBtn.innerHTML;

      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';
      submitBtn.disabled = true;

      setTimeout(() => {
        consultationForm.style.display = 'none';
        if (formSuccessState) {
          formSuccessState.classList.add('active');
        }
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        consultationForm.reset();
      }, 800);
    });
  }

  // --- 6. Video Demo Modal Handling ---
  const videoModal = document.getElementById('videoModal');
  const heroWatchVideoBtn = document.getElementById('heroWatchVideoBtn');
  const closeVideoModal = document.getElementById('closeVideoModal');
  const videoCtaBtn = document.getElementById('videoCtaBtn');

  function openVideoModal() {
    if (videoModal) {
      videoModal.classList.add('active');
      videoModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeVidModal() {
    if (videoModal) {
      videoModal.classList.remove('active');
      videoModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  }

  if (heroWatchVideoBtn) {
    heroWatchVideoBtn.addEventListener('click', openVideoModal);
  }
  if (closeVideoModal) {
    closeVideoModal.addEventListener('click', closeVidModal);
  }
  if (videoModal) {
    videoModal.addEventListener('click', (e) => {
      if (e.target === videoModal) {
        closeVidModal();
      }
    });
  }
  if (videoCtaBtn) {
    videoCtaBtn.addEventListener('click', () => {
      closeVidModal();
      setTimeout(openConsultModal, 200);
    });
  }

  // --- 7. "View More Case Studies" Button Action ---
  const viewMoreCasesBtn = document.getElementById('viewMoreCasesBtn');
  if (viewMoreCasesBtn) {
    viewMoreCasesBtn.addEventListener('click', () => {
      openConsultModal();
    });
  }

  // --- 8. Keyboard Accessibility (Escape to close modals & drawer) ---
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeConsultModal();
      closeVidModal();
      closeMobileNav();
    }
  });

  // --- 9. Active Nav Link on Scroll ---
  const sections = document.querySelectorAll('section[id]');
  const desktopNavLinks = document.querySelectorAll('.nav-link');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  window.addEventListener('scroll', () => {
    let currentSectionId = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 130;
      const sectionHeight = section.offsetHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        currentSectionId = section.getAttribute('id');
      }
    });

    if (currentSectionId) {
      desktopNavLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${currentSectionId}`) {
          link.classList.add('active');
        }
      });

      mobileLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${currentSectionId}`) {
          link.classList.add('active');
        }
      });
    }
  }, { passive: true });
});
