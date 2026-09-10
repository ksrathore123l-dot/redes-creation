/**
 * REDES CREATION - Main JavaScript
 * Interactive functionality & UI enhancements
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Drawer Navigation
  const mobileToggle = document.getElementById('mobileToggle');
  const drawerClose = document.getElementById('drawerClose');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const drawerBackdrop = document.getElementById('drawerBackdrop');
  const drawerLinks = document.querySelectorAll('.drawer-link');

  const openDrawer = () => {
    mobileDrawer.classList.add('open');
    drawerBackdrop.classList.add('open');
    document.body.style.overflow = 'hidden';
  };

  const closeDrawer = () => {
    mobileDrawer.classList.remove('open');
    drawerBackdrop.classList.remove('open');
    document.body.style.overflow = '';
  };

  if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
  if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
  if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);
  drawerLinks.forEach(link => link.addEventListener('click', closeDrawer));

  // 2. Sticky Header Shadow on Scroll
  const siteHeader = document.getElementById('siteHeader');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      siteHeader.classList.add('scrolled');
    } else {
      siteHeader.classList.remove('scrolled');
    }
  });

  // 3. Animated Number Counters
  const statNumbers = document.querySelectorAll('.stat-number');
  let animated = false;

  const countUp = (el) => {
    const target = parseInt(el.getAttribute('data-target'), 10);
    const suffix = el.getAttribute('data-suffix') || '+';
    let current = 0;
    const duration = 1800; // ms
    const stepTime = 20;
    const totalSteps = duration / stepTime;
    const increment = target / totalSteps;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        el.textContent = target + suffix;
        clearInterval(timer);
      } else {
        el.textContent = Math.floor(current) + suffix;
      }
    }, stepTime);
  };

  const statsSection = document.querySelector('.stats-section');
  if (statsSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !animated) {
          statNumbers.forEach(num => countUp(num));
          animated = true;
        }
      });
    }, { threshold: 0.3 });

    observer.observe(statsSection);
  }

  // 4. Testimonial Carousel
  const slides = document.querySelectorAll('.testimonial-slide');
  const dots = document.querySelectorAll('#testimonialDots .dot');
  const prevBtn = document.getElementById('prevTestimonial');
  const nextBtn = document.getElementById('nextTestimonial');
  let currentSlide = 0;
  let carouselInterval;

  const showSlide = (index) => {
    slides.forEach((s, idx) => {
      s.classList.toggle('active', idx === index);
    });
    dots.forEach((d, idx) => {
      d.classList.toggle('active', idx === index);
    });
    currentSlide = index;
  };

  const nextSlide = () => {
    const nextIdx = (currentSlide + 1) % slides.length;
    showSlide(nextIdx);
  };

  const prevSlide = () => {
    const prevIdx = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prevIdx);
  };

  if (nextBtn) nextBtn.addEventListener('click', () => {
    nextSlide();
    resetCarouselTimer();
  });

  if (prevBtn) prevBtn.addEventListener('click', () => {
    prevSlide();
    resetCarouselTimer();
  });

  dots.forEach(dot => {
    dot.addEventListener('click', (e) => {
      const slideIndex = parseInt(e.target.getAttribute('data-slide'), 10);
      showSlide(slideIndex);
      resetCarouselTimer();
    });
  });

  const startCarouselTimer = () => {
    carouselInterval = setInterval(nextSlide, 5000);
  };

  const resetCarouselTimer = () => {
    clearInterval(carouselInterval);
    startCarouselTimer();
  };

  startCarouselTimer();

  // 5. Consultation Modal Dialog
  const consultationModal = document.getElementById('consultationModal');
  const openConsultationBtns = document.querySelectorAll('.open-consultation-btn');
  const closeConsultationModal = document.getElementById('closeConsultationModal');
  const consultationForm = document.getElementById('consultationForm');
  const formSuccessMsg = document.getElementById('formSuccessMsg');

  const openConsultModal = () => {
    consultationModal.classList.add('open');
    consultationModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (formSuccessMsg) formSuccessMsg.classList.remove('show');
    if (consultationForm) {
      consultationForm.style.display = 'flex';
      consultationForm.reset();
    }
  };

  const closeConsultModal = () => {
    consultationModal.classList.remove('open');
    consultationModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  openConsultationBtns.forEach(btn => btn.addEventListener('click', openConsultModal));
  if (closeConsultationModal) closeConsultationModal.addEventListener('click', closeConsultModal);
  if (consultationModal) {
    consultationModal.addEventListener('click', (e) => {
      if (e.target === consultationModal) closeConsultModal();
    });
  }

  // Consultation Form Submission
  if (consultationForm) {
    consultationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = consultationForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';
      submitBtn.disabled = true;

      setTimeout(() => {
        consultationForm.style.display = 'none';
        if (formSuccessMsg) formSuccessMsg.classList.add('show');
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
      }, 1000);
    });
  }

  // 6. "See Our Work" Showcase Modal
  const workModal = document.getElementById('workModal');
  const seeOurWorkBtn = document.getElementById('seeOurWorkBtn');
  const closeWorkModal = document.getElementById('closeWorkModal');

  if (seeOurWorkBtn && workModal) {
    seeOurWorkBtn.addEventListener('click', () => {
      workModal.classList.add('open');
      workModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    });
  }

  if (closeWorkModal && workModal) {
    closeWorkModal.addEventListener('click', () => {
      workModal.classList.remove('open');
      workModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    });
  }

  if (workModal) {
    workModal.addEventListener('click', (e) => {
      if (e.target === workModal) {
        workModal.classList.remove('open');
        workModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }
    });
  }

  // Close modals on Escape key
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeConsultModal();
      if (workModal) {
        workModal.classList.remove('open');
        workModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }
      closeDrawer();
    }
  });

  // 7. Active Navigation Link on Scroll
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.main-nav .nav-link');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 120;
      const sectionHeight = section.offsetHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });
});
