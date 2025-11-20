// DARK MODE TOGGLE
function toggleDark() {
  document.body.classList.toggle("dark");
}
window.addEventListener("scroll", () => {
  const box = document.querySelector(".fade-box");

  if (window.scrollY > 200) {
    box.classList.add("hide");
  } else {
    box.classList.remove("hide");
  }
});
document.querySelector(".open-tab").addEventListener("click", function() {
  const url = this.dataset.link;
  window.open(url, "_blank");
});
