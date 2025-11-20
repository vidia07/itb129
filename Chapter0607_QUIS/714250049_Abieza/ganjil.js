// Typing effect for hero text
const typingText = document.getElementById('typing-text');
const text = "Welcome to Snow Fve APPS";
let index = 0;

function typeWriter() {
    if (index < text.length) {
        typingText.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 100);
    } else {
        typingText.style.borderRight = 'none';
    }
}

// Start typing effect when page loads
window.addEventListener('load', () => {
    typeWriter();
});

// Smooth scroll to features section on CTA button click
const ctaButton = document.getElementById('cta-button');
ctaButton.addEventListener('click', () => {
    document.getElementById('features').scrollIntoView({
        behavior: 'smooth'
    });
});

// Add glow effect to feature cards on hover (enhancing CSS)
const featureCards = document.querySelectorAll('.feature-card');
featureCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.boxShadow = '0 20px 40px rgba(0, 255, 255, 0.6), 0 0 20px rgba(0, 255, 255, 0.4)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.boxShadow = '0 20px 40px rgba(0, 255, 255, 0.3)';
    });
});
