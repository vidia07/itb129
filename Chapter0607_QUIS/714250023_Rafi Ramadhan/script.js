
const typingText = "AI Assistent Terbaik";
let i = 0;
function typeHeroText() {
  const target = document.querySelector(".paragraf1");
  if (i < typingText.length) {
    target.textContent += typingText.charAt(i);
    i++;
    setTimeout(typeHeroText, 40);
  }
}
window.onload = typeHeroText;

function scrollToSelection(id) {
  const section = document.getElementById(id);
  if (section) {
    section.scrollIntoView({ behavior: "smooth" });
  }
}

document.querySelectorAll(".feature > div").forEach(card => {
  card.style.transition = "transform 0.3s ease, box-shadow 0.3s ease";
  card.addEventListener("mouseover", () => {
    card.style.transform = "translateY(-10px)";
    card.style.boxShadow = "0 10px 20px rgba(4, 230, 230, 0.3)";
  });
  card.addEventListener("mouseout", () => {
    card.style.transform = "translateY(0)";
    card.style.boxShadow = "none";
  });
});
