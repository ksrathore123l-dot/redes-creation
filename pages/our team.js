document.addEventListener("DOMContentLoaded", () => {
  const modal = document.querySelector("[data-ot-modal]");
  const open = document.querySelector("[data-ot-open-video]");
  const close = document.querySelector("[data-ot-close]");

  open?.addEventListener("click", () => {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
  });

  const hide = () => {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
  };

  close?.addEventListener("click", hide);
  modal?.addEventListener("click", (e) => {
    if (e.target === modal) hide();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") hide();
  });

  const grid = document.querySelector(".ot-member-grid");
  const viewport = document.querySelector(".ot-member-viewport");
  const cards = [
    ...document.querySelectorAll(".ot-member-grid .ot-member-card"),
  ];
  const previous = document.querySelector(".ot-slider-prev");
  const next = document.querySelector(".ot-slider-next");
  const dots = [...document.querySelectorAll(".ot-slider-dots button")];
  let currentPage = 0;

  const getVisibleCards = () =>
    window.innerWidth <= 450
      ? 1
      : window.innerWidth <= 760
        ? 2
        : window.innerWidth <= 1100
          ? 3
          : 5;

  const updateSlider = () => {
    if (!grid || !cards.length) return;
    const visibleCards = getVisibleCards();
    const lastPage = Math.max(0, cards.length - visibleCards);
    currentPage = Math.min(currentPage, lastPage);
    const cardWidth = cards[0]?.getBoundingClientRect().width || 0;
    const gap = Number.parseFloat(getComputedStyle(grid).gap) || 0;
    grid.style.transform = `translateX(-${currentPage * (cardWidth + gap)}px)`;
    previous.disabled = currentPage === 0;
    next.disabled = currentPage === lastPage;
    dots.forEach((dot, index) => {
      dot.hidden = index > lastPage;
      dot.classList.toggle("is-active", index === currentPage);
    });
  };

  previous?.addEventListener("click", () => {
    currentPage -= 1;
    updateSlider();
  });
  next?.addEventListener("click", () => {
    currentPage += 1;
    updateSlider();
  });
  dots.forEach((dot, index) =>
    dot.addEventListener("click", () => {
      currentPage = index;
      updateSlider();
    }),
  );
  window.addEventListener("resize", updateSlider);
  updateSlider();
});
