// --------------------------------------
// TYPING EFFECT
// --------------------------------------
const textArray = [
    "AI Assistant Cerdas",
    "Smart Home Otomatis",
    "AR Experience Futuristik"
];

let index = 0;
let charIndex = 0;

function typeEffect() {
    const typewriter = document.getElementById("typewriter");
    typewriter.textContent = textArray[index].slice(0, charIndex);

    charIndex++;

    if (charIndex > textArray[index].length) {
        charIndex = 0;
        index = (index + 1) % textArray.length;
    }

    setTimeout(typeEffect, 120);
}

typeEffect();

// --------------------------------------
// DARK MODE TOGGLE
// --------------------------------------
const toggleBtn = document.getElementById("theme-toggle");

toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("light");
});

// --------------------------------------
// VIDEO OVERLAY PLAY
// --------------------------------------
const video = document.getElementById("techVideo");
const overlay = document.getElementById("videoOverlay");

overlay.addEventListener("click", () => {
    overlay.style.display = "none";
    video.play();
});