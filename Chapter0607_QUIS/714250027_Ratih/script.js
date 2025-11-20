const textElement = document.getElementById('typing-text');
const textToType = 'Synapse: Your Mind, Optimized.';
let charIndex = 0;

function typeText() {
    if (charIndex < textToType.length) {
        textElement.textContent += textToType.charAt(charIndex);
        charIndex++;
        setTimeout(typeText, 70); 
    } else {
        textElement.style.borderRight = 'none'; 
    }
}

document.addEventListener('DOMContentLoaded', () => {
    typeText(); 

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});