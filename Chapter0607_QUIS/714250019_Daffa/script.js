// Typing Effect
const text = "Selamat datang di FutureTech — Teknologi Masa Depan.";
let index = 0;

function typingEffect() {
    const typingElement = document.getElementById("typing");
    if (index < text.length) {
        typingElement.innerHTML += text.charAt(index);
        index++;
        setTimeout(typingEffect, 55);
    } else {
        // ketika selesai mengetik → auto scroll
        scrollToSection("target-section");  
    }
}

typingEffect();

// Smooth Scroll CTA
function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({
        behavior: "smooth"
    });
}
