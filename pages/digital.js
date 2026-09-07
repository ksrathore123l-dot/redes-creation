const btn = document.querySelector(".dm-menu"),
  nav = document.querySelector(".dm-nav");
btn.addEventListener("click", () => {
  nav.classList.toggle("open");
  btn.innerHTML = nav.classList.contains("open")
    ? '<i class="fa-solid fa-xmark"></i>'
    : '<i class="fa-solid fa-bars"></i>';
});
document
  .querySelectorAll(".dm-nav a")
  .forEach((a) =>
    a.addEventListener("click", () => nav.classList.remove("open")),
  );
