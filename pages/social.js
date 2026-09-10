/**
 * REDES CREATION - Interactive JavaScript Logic
 */

document.addEventListener("DOMContentLoaded", () => {
  // 1. Consultation Modal Functionality
  const consultationModal = document.getElementById("consultationModal");
  const closeConsultationBtn = document.getElementById("closeConsultationBtn");
  const consultationForm = document.getElementById("consultationForm");
  const openConsultationBtns = document.querySelectorAll(
    ".open-consultation-btn",
  );
  const toastMessage = document.getElementById("toastMessage");

  const openModal = (modal) => {
    if (!modal) return;
    modal.classList.add("active");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  };

  const closeModal = (modal) => {
    if (!modal) return;
    modal.classList.remove("active");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  };

  openConsultationBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      openModal(consultationModal);
    });
  });

  if (closeConsultationBtn) {
    closeConsultationBtn.addEventListener("click", () => {
      closeModal(consultationModal);
    });
  }

  // 2. Video Modal Functionality
  const videoModal = document.getElementById("videoModal");
  const watchVideoBtn = document.getElementById("watchVideoBtn");
  const closeVideoBtn = document.getElementById("closeVideoBtn");
  const videoIframe = document.getElementById("videoIframe");

  if (watchVideoBtn && videoModal) {
    watchVideoBtn.addEventListener("click", () => {
      if (videoIframe) {
        videoIframe.src =
          "https://www.youtube.com/embed/ScMzIvxBSi4?autoplay=1";
      }
      openModal(videoModal);
    });
  }

  if (closeVideoBtn && videoModal) {
    closeVideoBtn.addEventListener("click", () => {
      if (videoIframe) videoIframe.src = "";
      closeModal(videoModal);
    });
  }

  // Close modals when clicking backdrop or ESC key
  window.addEventListener("click", (e) => {
    if (e.target === consultationModal) closeModal(consultationModal);
    if (e.target === videoModal) {
      if (videoIframe) videoIframe.src = "";
      closeModal(videoModal);
    }
  });

  window.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeModal(consultationModal);
      if (videoModal && videoModal.classList.contains("active")) {
        if (videoIframe) videoIframe.src = "";
        closeModal(videoModal);
      }
    }
  });

  // 3. Consultation Form Submit & Toast Alert
  if (consultationForm) {
    consultationForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const submitBtn = consultationForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = "<span>Booking Consultation...</span>";
      submitBtn.disabled = true;

      setTimeout(() => {
        closeModal(consultationModal);
        consultationForm.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;

        // Show Toast
        if (toastMessage) {
          toastMessage.classList.add("show");
          setTimeout(() => {
            toastMessage.classList.remove("show");
          }, 4500);
        }
      }, 900);
    });
  }

  // 4. Animated Stats Number Counter on Scroll
  const statNumbers = document.querySelectorAll(".stat-number");
  let animated = false;

  const animateCounters = () => {
    statNumbers.forEach((stat) => {
      const target = parseFloat(stat.getAttribute("data-target"));
      const suffix = stat.getAttribute("data-suffix") || "";
      let current = 0;
      const increment = target / 40;
      const speed = 25;

      const updateCounter = () => {
        current += increment;
        if (current >= target) {
          stat.textContent = target + suffix;
        } else {
          stat.textContent = Math.ceil(current) + suffix;
          setTimeout(updateCounter, speed);
        }
      };

      updateCounter();
    });
  };

  const statsSection = document.querySelector(".stats-ribbon");
  if (statsSection) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !animated) {
            animated = true;
            animateCounters();
          }
        });
      },
      { threshold: 0.3 },
    );

    observer.observe(statsSection);
  }

  // 5. Interactive Phone Mockup Tabs & Highlights
  const instaTabs = document.querySelectorAll(".insta-tabs .tab-btn");
  instaTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      instaTabs.forEach((t) => t.classList.remove("active"));
      tab.classList.add("active");
    });
  });

  const highlightItems = document.querySelectorAll(".highlight-item");
  highlightItems.forEach((item) => {
    item.addEventListener("click", () => {
      item.style.transform = "scale(0.92)";
      setTimeout(() => {
        item.style.transform = "";
      }, 150);
    });
  });

  // 6. Interactive Post Cards (Like Pulse)
  const instaPosts = document.querySelectorAll(".insta-post-card");
  instaPosts.forEach((post) => {
    post.addEventListener("click", () => {
      post.style.transform = "scale(0.96)";
      setTimeout(() => {
        post.style.transform = "";
      }, 180);
    });
  });
});
