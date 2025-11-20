// Typing Effect
const text = [
    "Your Intelligent Assistant for Future Tech Solutions",
    "Control Your Smart Home with Ease",
];

let index = 0;
let char = 0;

function typingEffect() {
    const typingDiv = document.getElementById("typing");
    typingDiv.textContent = text[index].slice(0, char);
    char++;

    if (char > text[index].length) {
        char = 0;
        index = (index + 1) % text.length;
    }

    setTimeout(typingEffect, 120);
}

typingEffect();