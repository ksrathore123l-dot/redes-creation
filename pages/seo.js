/**
 * REDES CREATION - SEO SERVICES WEBSITE
 * Interactive Functionality & Micro-Interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initTestimonialsSlider();
  initStatsCounter();
  initModals();
});

/* ==========================================================================
   1. NAVIGATION & SCROLL HIGHLIGHTING
   ========================================================================== */
function initNavbar() {
  const header = document.getElementById('main-header');
  const navLinks = document.querySelectorAll('.nav-link');
  const mobileToggle = document.getElementById('mobile-toggle');
  const navMenu = document.getElementById('primary-nav');

  // Sticky Header Shadow on Scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.08)';
    } else {
      header.style.boxShadow = 'none';
    }
    updateActiveNav();
  });

  // Mobile Menu Toggle
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('mobile-open');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
        navMenu.classList.remove('mobile-open');
      }
    });
  }

  // Active Nav Link Spy
  function updateActiveNav() {
    const scrollPos = window.scrollY + 100;
    const sections = ['hero', 'why-seo', 'services', 'results', 'process', 'brands'];
    
    sections.forEach((id) => {
      const section = document.getElementById(id);
      if (section) {
        const top = section.offsetTop;
        const height = section.offsetHeight;
        if (scrollPos >= top && scrollPos < top + height) {
          navLinks.forEach((link) => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${id}`) {
              link.classList.add('active');
            }
          });
        }
      }
    });
  }
}

/* ==========================================================================
   2. TESTIMONIALS SLIDER / CAROUSEL
   ========================================================================== */
function initTestimonialsSlider() {
  const cards = document.querySelectorAll('.case-study-card');
  const dots = document.querySelectorAll('.slider-dots .dot');
  const prevBtn = document.getElementById('prev-slide-btn');
  const nextBtn = document.getElementById('next-slide-btn');
  
  if (!cards.length) return;
  
  let currentIndex = 0;
  const totalSlides = cards.length;

  function showSlide(index) {
    if (index >= totalSlides) currentIndex = 0;
    else if (index < 0) currentIndex = totalSlides - 1;
    else currentIndex = index;

    cards.forEach((card, i) => {
      card.classList.toggle('active', i === currentIndex);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentIndex);
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      showSlide(currentIndex + 1);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      showSlide(currentIndex - 1);
    });
  }

  dots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      showSlide(idx);
    });
  });
}

/* ==========================================================================
   3. ANIMATED NUMBER COUNTERS
   ========================================================================== */
function initStatsCounter() {
  const statsElements = document.querySelectorAll('.stat-number[data-target]');
  let hasAnimated = false;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !hasAnimated) {
        hasAnimated = true;
        statsElements.forEach((el) => {
          const target = parseInt(el.getAttribute('data-target'), 10);
          const isPercent = el.textContent.includes('%');
          const isPlus = el.textContent.includes('+');
          let current = 0;
          const increment = Math.ceil(target / 40);
          const interval = setInterval(() => {
            current += increment;
            if (current >= target) {
              current = target;
              clearInterval(interval);
            }
            let text = current.toString();
            if (isPlus) text += '+';
            if (isPercent) text += '%';
            el.textContent = text;
          }, 30);
        });
      }
    });
  }, { threshold: 0.5 });

  const statsSection = document.getElementById('hero-stats');
  if (statsSection) {
    observer.observe(statsSection);
  }
}

/* ==========================================================================
   4. MODALS (SEO AUDIT & VIDEO)
   ========================================================================== */
function initModals() {
  const modals = document.querySelectorAll('.modal-overlay');

  modals.forEach((modal) => {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        closeAllModals();
      }
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeAllModals();
    }
  });
}

function openAuditModal() {
  const modal = document.getElementById('audit-modal');
  if (modal) {
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
}

function closeAuditModal() {
  const modal = document.getElementById('audit-modal');
  if (modal) {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
}

function openVideoModal() {
  const modal = document.getElementById('video-modal');
  if (modal) {
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
}

function closeVideoModal() {
  const modal = document.getElementById('video-modal');
  if (modal) {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
}

function closeAllModals() {
  closeAuditModal();
  closeVideoModal();
}

function handleAuditSubmit(e) {
  e.preventDefault();
  closeAuditModal();
  showToast('Audit Request Received! Our SEO team will contact you shortly.');
  const form = document.getElementById('seo-audit-form');
  if (form) form.reset();
}

function showToast(message) {
  const toast = document.getElementById('toast-msg');
  if (toast) {
    toast.textContent = message;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 4000);
  }
}

// Expose modal handlers to window for inline onclick attributes
window.openAuditModal = openAuditModal;
window.closeAuditModal = closeAuditModal;
window.openVideoModal = openVideoModal;
window.closeVideoModal = closeVideoModal;
window.handleAuditSubmit = handleAuditSubmit;
