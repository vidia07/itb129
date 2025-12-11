document.addEventListener('DOMContentLoaded', function() {

    const titleElement = document.querySelector('header h1');
    const originalText = titleElement.textContent;
    const typingSpeed = 100;
    let charIndex = 0;

    titleElement.textContent = '';

    function typeText() {
        if (charIndex < originalText.length) {
            titleElement.textContent += originalText.charAt(charIndex);
            charIndex++;
            setTimeout(typeText, typingSpeed);
        } else {
        }
    }

    typeText();

    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.style.opacity = '0.95';
        } else {
            nav.style.opacity = '1';
        }
    });
});