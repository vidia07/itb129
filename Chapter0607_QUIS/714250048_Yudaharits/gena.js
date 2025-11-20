// Portfolio slider functionality
const slidesEl = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');
const prevBtn = document.querySelector('.slider-btn.prev');
const nextBtn = document.querySelector('.slider-btn.next');

let currentIndex = 0;
const totalSlides = images.length;

function updateSlider() {
    slidesEl.style.transform = `translateX(-${currentIndex * 800}px)`;
}

nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider();
});

prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlider();
});

// Auto slider every 5 seconds
setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlider();
}, 5000);

// Testimonial slider
const testiSlider = document.querySelector('.testimonials-slider');
const testiPrev = document.querySelector('.testi-btn.prev');
const testiNext = document.querySelector('.testi-btn.next');

let testiIndex = 0;
const testiCardWidth = 320; // width + margin approx

function updateTestiSlider() {
    testiSlider.scrollTo({
        left: testiIndex * testiCardWidth,
        behavior: 'smooth',
    });
}

testiNext.addEventListener('click', () => {
    if (testiIndex < testiSlider.children.length - 1) {
        testiIndex++;
        updateTestiSlider();
    }
});

testiPrev.addEventListener('click', () => {
    if (testiIndex > 0) {
        testiIndex--;
        updateTestiSlider();
    }
});

// Form validation
const form = document.getElementById('contactForm');
const formMessage = document.getElementById('formMessage');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    let hasError = false;

    const name = form.name;
    const email = form.email;
    const message = form.message;

    clearErrors();

    if (name.value.trim() === '') {
        showError(name, 'Nama harus diisi');
        hasError = true;
    }
    if (email.value.trim() === '') {
        showError(email, 'Email harus diisi');
        hasError = true;
    } else if (!validateEmail(email.value.trim())) {
        showError(email, 'Email tidak valid');
        hasError = true;
    }
    if (message.value.trim() === '') {
        showError(message, 'Pesan harus diisi');
        hasError = true;
    }

    if (!hasError) {
        formMessage.textContent = 'Pesan berhasil dikirim!';
        formMessage.style.color = '#27ae60';
        form.reset();
    }
});

function clearErrors() {
    const errorMessages = form.querySelectorAll('.error-message');
    errorMessages.forEach((em) => {
        em.style.display = 'none';
        em.textContent = '';
    });
}

function showError(input, message) {
    const errorMsg = input.nextElementSibling;
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
}

function validateEmail(email) {
    // Simple regex for email validation
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email.toLowerCase());
}