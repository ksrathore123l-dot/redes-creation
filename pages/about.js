const m = document.querySelector(".menu"),
  n = document.querySelector("nav");
m?.addEventListener("click", () => {
  n.style.display = n.style.display === "flex" ? "none" : "flex";
  n.style.position = "absolute";
  n.style.top = "68px";
  n.style.left = "0";
  n.style.right = "0";
  n.style.background = "#fff";
  n.style.padding = "15px 6%";
  n.style.flexDirection = "column";
  n.style.gap = "0";
});
const modal = document.getElementById("modal");
document
  .getElementById("storyBtn")
  ?.addEventListener("click", () => modal.classList.add("show"));
document
  .getElementById("close")
  ?.addEventListener("click", () => modal.classList.remove("show"));
modal?.addEventListener("click", (e) => {
  if (e.target === modal) modal.classList.remove("show");
});

