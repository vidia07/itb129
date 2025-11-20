// Portfolio Slider
let currentSlide = 0;
const slides = document.getElementById('portfolioSlides');
const totalSlides = slides.children.length;

function showSlide(index) {
    slides.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

// Auto slide
setInterval(nextSlide, 5000);

// Form Validation
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let valid = true;

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    document.getElementById('nameError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('messageError').textContent = '';

    if (name === '') {
        document.getElementById('nameError').textContent = 'Nama diperlukan.';
        valid = false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('emailError').textContent = 'Email yang valid diperlukan.';
        valid = false;
    }

    if (message === '') {
        document.getElementById('messageError').textContent = 'Pesan diperlukan.';
        valid = false;
    }

    if (valid) {
        alert('Formulir berhasil dikirim!');
        // Here you can add code to send the form data
    }
});