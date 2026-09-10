/**
 * REDES CREATION - POS & Kitchen Display System (KDS)
 * Main Interactive Application Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initAnimatedCounters();
  initModals();
  initInteractivePOSandKDS();
  initSmoothScroll();
});

/* ==========================================================================
   1. NAVBAR & MOBILE MENU
   ========================================================================== */
function initNavbar() {
  const header = document.getElementById('siteHeader');
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');
  const navLinks = document.querySelectorAll('.nav-link');

  // Sticky header scroll event
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });

  // Mobile drawer toggle
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = navMenu.classList.toggle('open');
      mobileToggle.setAttribute('aria-expanded', isOpen);
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target) && navMenu.classList.contains('open')) {
        navMenu.classList.remove('open');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });

    // Close menu on nav item click
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('open');
        mobileToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }
}

/* ==========================================================================
   2. STATS ANIMATED COUNTERS
   ========================================================================== */
function initAnimatedCounters() {
  const counters = document.querySelectorAll('.counter');
  let animated = false;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !animated) {
        animated = true;
        counters.forEach(counter => {
          const target = +counter.getAttribute('data-target');
          const duration = 1500; // ms
          const stepTime = 20;
          const totalSteps = duration / stepTime;
          const increment = target / totalSteps;
          let current = 0;

          const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
              counter.innerText = target;
              clearInterval(timer);
            } else {
              counter.innerText = Math.floor(current);
            }
          }, stepTime);
        });
      }
    });
  }, { threshold: 0.3 });

  const statsSection = document.querySelector('.stats-bar-section');
  if (statsSection) {
    observer.observe(statsSection);
  }
}

/* ==========================================================================
   3. MODALS (DEMO & VIDEO)
   ========================================================================== */
function initModals() {
  const demoModal = document.getElementById('demoModal');
  const videoModal = document.getElementById('videoModal');
  const demoButtons = document.querySelectorAll('.open-demo-modal');
  const videoButtons = document.querySelectorAll('.open-video-modal');
  const closeDemoModal = document.getElementById('closeDemoModal');
  const closeVideoModal = document.getElementById('closeVideoModal');
  const closeSuccessBtn = document.getElementById('closeSuccessBtn');
  const demoForm = document.getElementById('demoForm');
  const successMsg = document.getElementById('demoSuccessMessage');

  // Open Demo Modal
  demoButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      if (demoModal) {
        demoForm.style.display = 'flex';
        successMsg.classList.remove('active');
        demoModal.showModal();
      }
    });
  });

  // Open Video Modal
  videoButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      if (videoModal) {
        videoModal.showModal();
      }
    });
  });

  // Close Buttons
  if (closeDemoModal) {
    closeDemoModal.addEventListener('click', () => demoModal.close());
  }
  if (closeVideoModal) {
    closeVideoModal.addEventListener('click', () => videoModal.close());
  }
  if (closeSuccessBtn) {
    closeSuccessBtn.addEventListener('click', () => demoModal.close());
  }

  // Close dialog on clicking outside backdrop
  [demoModal, videoModal].forEach(modal => {
    if (modal) {
      modal.addEventListener('click', (e) => {
        const rect = modal.getBoundingClientRect();
        const isInDialog = (
          rect.top <= e.clientY &&
          e.clientY <= rect.top + rect.height &&
          rect.left <= e.clientX &&
          e.clientX <= rect.left + rect.width
        );
        if (!isInDialog) {
          modal.close();
        }
      });
    }
  });

  // Handle Demo Form Submission
  if (demoForm) {
    demoForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = document.getElementById('submitDemoBtn');
      submitBtn.innerText = 'Submitting...';
      submitBtn.disabled = true;

      setTimeout(() => {
        demoForm.style.display = 'none';
        successMsg.classList.add('active');
        demoForm.reset();
        submitBtn.innerHTML = 'Request Instant Access <span>&rarr;</span>';
        submitBtn.disabled = false;
        showToast('Demo request received! Our team is preparing your session.');
      }, 700);
    });
  }
}

/* ==========================================================================
   4. INTERACTIVE POS & KDS SIMULATION
   ========================================================================== */
function initInteractivePOSandKDS() {
  const foodCards = document.querySelectorAll('.pos-food-card');
  const kdsContainer = document.getElementById('kdsTicketsContainer');
  const refreshKdsBtn = document.getElementById('refreshKdsBtn');
  let nextTicketNum = 106;

  // Clicking food item in POS -> Syncs instantly to KDS
  foodCards.forEach(card => {
    card.addEventListener('click', () => {
      const foodName = card.getAttribute('data-food');
      const foodPrice = card.getAttribute('data-price');

      // Click animation
      card.style.transform = 'scale(0.94)';
      setTimeout(() => {
        card.style.transform = '';
      }, 150);

      // Toast alert
      showToast(`⚡ POS: Ordered 1x ${foodName} ($${foodPrice}) -> Syncing to Kitchen...`);

      // Add dynamic ticket to KDS
      if (kdsContainer) {
        const newTicket = document.createElement('div');
        newTicket.className = 'kds-ticket';
        newTicket.setAttribute('data-ticket', nextTicketNum);
        newTicket.innerHTML = `
          <div class="ticket-head">
            <span class="ticket-num">#${nextTicketNum}</span>
            <span class="ticket-type">Dine In (New)</span>
          </div>
          <div class="ticket-items">
            <div class="ticket-item-line">1 x ${foodName}</div>
            <div class="ticket-item-line">1 x Fresh Drink</div>
          </div>
          <div class="ticket-timer timer-green">
            <span class="timer-time">1 min</span>
          </div>
        `;

        newTicket.style.animation = 'slideInUp 0.3s ease forwards';
        kdsContainer.prepend(newTicket);

        // Keep maximum 4 tickets visible
        if (kdsContainer.children.length > 4) {
          kdsContainer.lastElementChild.remove();
        }

        attachTicketClick(newTicket);
        nextTicketNum++;
      }
    });
  });

  // Attach click to existing tickets (mark done)
  document.querySelectorAll('.kds-ticket').forEach(ticket => {
    attachTicketClick(ticket);
  });

  function attachTicketClick(ticket) {
    ticket.addEventListener('click', () => {
      const ticketNum = ticket.getAttribute('data-ticket');
      ticket.style.transition = 'all 0.3s ease';
      ticket.style.opacity = '0.5';
      ticket.style.transform = 'scale(0.9)';

      setTimeout(() => {
        showToast(`👨‍🍳 KDS: Ticket #${ticketNum} marked as READY & Served!`);
        ticket.remove();

        // If empty, generate fallback ticket
        if (kdsContainer.children.length === 0) {
          resetKdsTickets();
        }
      }, 300);
    });
  }

  // Refresh KDS Orders
  if (refreshKdsBtn) {
    refreshKdsBtn.addEventListener('click', () => {
      refreshKdsBtn.style.transform = 'rotate(360deg)';
      refreshKdsBtn.style.transition = 'transform 0.5s ease';
      setTimeout(() => {
        refreshKdsBtn.style.transform = 'none';
        refreshKdsBtn.style.transition = 'none';
      }, 500);

      resetKdsTickets();
      showToast('KDS: Live orders refreshed and synced with POS.');
    });
  }

  function resetKdsTickets() {
    if (!kdsContainer) return;
    kdsContainer.innerHTML = `
      <div class="kds-ticket" data-ticket="102">
        <div class="ticket-head">
          <span class="ticket-num">#102</span>
          <span class="ticket-type">Dine In</span>
        </div>
        <div class="ticket-items">
          <div class="ticket-item-line">Margherita Pizza</div>
          <div class="ticket-item-line">1 x Garlic Bread</div>
          <div class="ticket-item-line">1 x Coke</div>
        </div>
        <div class="ticket-timer timer-green">
          <span class="timer-time">5 mins</span>
        </div>
      </div>
      <div class="kds-ticket" data-ticket="103">
        <div class="ticket-head">
          <span class="ticket-num">#103</span>
          <span class="ticket-type">Takeaway</span>
        </div>
        <div class="ticket-items">
          <div class="ticket-item-line">Chicken Burger</div>
          <div class="ticket-item-line">1 x French Fries</div>
        </div>
        <div class="ticket-timer timer-blue">
          <span class="timer-time">8 mins</span>
        </div>
      </div>
      <div class="kds-ticket" data-ticket="104">
        <div class="ticket-head">
          <span class="ticket-num">#104</span>
          <span class="ticket-type">Online</span>
        </div>
        <div class="ticket-items">
          <div class="ticket-item-line">Pasta Alfredo</div>
          <div class="ticket-item-line">1 x Caesar Salad</div>
        </div>
        <div class="ticket-timer timer-orange">
          <span class="timer-time">12 mins</span>
        </div>
      </div>
      <div class="kds-ticket" data-ticket="105">
        <div class="ticket-head">
          <span class="ticket-num">#105</span>
          <span class="ticket-type">Dine In</span>
        </div>
        <div class="ticket-items">
          <div class="ticket-item-line">Grilled Sandwich</div>
          <div class="ticket-item-line">1 x Iced Tea</div>
        </div>
        <div class="ticket-timer timer-green">
          <span class="timer-time">3 mins</span>
        </div>
      </div>
    `;

    document.querySelectorAll('.kds-ticket').forEach(t => attachTicketClick(t));
  }
}

/* ==========================================================================
   5. TOAST NOTIFICATION UTILITY
   ========================================================================== */
function showToast(message) {
  const container = document.getElementById('toastContainer');
  if (!container) return;

  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerText = message;

  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(10px)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 3500);
}

/* ==========================================================================
   6. SMOOTH SCROLL & ACTIVE LINK HIGHLIGHTING
   ========================================================================== */
function initSmoothScroll() {
  const links = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section[id]');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    links.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  }, { passive: true });
}
