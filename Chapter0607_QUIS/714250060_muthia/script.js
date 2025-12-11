document.addEventListener('DOMContentLoaded', function() {
    // Portfolio Slider (Auto Slide + Manual Swipe + Tombol)
    const portfolioWrapper = document.querySelector('.portfolio-wrapper');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const portfolioPrev = document.getElementById('portfolio-prev');
    const portfolioNext = document.getElementById('portfolio-next');
    let portfolioIndex = 0;
    const portfolioTotal = portfolioItems.length;
    let autoSlideInterval;

    function updatePortfolioSlider() {
        const offset = -portfolioIndex * 100;
        portfolioWrapper.style.transform = `translateX(${offset}%)`;
    }

    function nextPortfolioSlide() {
        portfolioIndex = (portfolioIndex + 1) % portfolioTotal;
        updatePortfolioSlider();
    }

    function prevPortfolioSlide() {
        portfolioIndex = (portfolioIndex - 1 + portfolioTotal) % portfolioTotal;
        updatePortfolioSlider();
    }

    // Auto slide setiap 3 detik
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextPortfolioSlide, 3000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Tombol navigasi
    portfolioNext.addEventListener('click', () => {
        stopAutoSlide();
        nextPortfolioSlide();
        startAutoSlide(); // Restart auto slide
    });

    portfolioPrev.addEventListener('click', () => {
        stopAutoSlide();
        prevPortfolioSlide();
        startAutoSlide();
    });

    // Manual swipe/drag
    let portfolioStartX = 0;
    let portfolioIsDragging = false;

    portfolioWrapper.addEventListener('mousedown', (e) => {
        portfolioIsDragging = true;
        portfolioStartX = e.clientX;
        stopAutoSlide();
    });

    portfolioWrapper.addEventListener('mousemove', (e) => {
        if (!portfolioIsDragging) return;
        const currentX = e.clientX;
        const diff = portfolioStartX - currentX;
        if (diff > 50) {
            nextPortfolioSlide();
            portfolioIsDragging = false;
        } else if (diff < -50) {
            prevPortfolioSlide();
            portfolioIsDragging = false;
        }
    });

    portfolioWrapper.addEventListener('mouseup', () => {
        portfolioIsDragging = false;
        startAutoSlide();
    });

    // Touch support untuk mobile
    portfolioWrapper.addEventListener('touchstart', (e) => {
        portfolioStartX = e.touches[0].clientX;
        stopAutoSlide();
    });

    portfolioWrapper.addEventListener('touchend', (e) => {
        const endX = e.changedTouches[0].clientX;
        if (portfolioStartX > endX + 50) nextPortfolioSlide();
        if (portfolioStartX < endX - 50) prevPortfolioSlide();
        startAutoSlide();
    });

    // Mulai auto slide
    startAutoSlide();

    // Testimoni Slider (Geser Manual + Tombol)
    const slider = document.querySelector('.slider');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;

    function updateSlider() {
        const offset = -currentIndex * 100;
        slider.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % cards.length;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
        updateSlider();
    }

    // Tombol navigasi
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Geser manual (drag)
    let startX = 0;
    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    slider.addEventListener('touchend', (e) => {
        const endX = e.changedTouches[0].clientX;
        if (startX > endX + 50) nextSlide();
        if (startX < endX - 50) prevSlide();
    });

    // Form Kontak dengan Validasi
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');
    const nameError = document.getElementById('name-error');
    const emailError = document.getElementById('email-error');
    const messageError = document.getElementById('message-error');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;

        // Reset error messages
        nameError.textContent = '';
        emailError.textContent = '';
        messageError.textContent = '';
        formMessage.textContent = '';

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validasi Name
        if (!name) {
            nameError.textContent = 'Nama wajib diisi.';
            isValid = false;
        }

        // Validasi Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) {
            emailError.textContent = 'Email wajib diisi.';
            isValid = false;
        } else if (!emailRegex.test(email)) {
            emailError.textContent = 'Format email tidak valid.';
            isValid = false;
        }

        // Validasi Message
        if (!message) {
            messageError.textContent = 'Pesan wajib diisi.';
            isValid = false;
        }

        if (isValid) {
            formMessage.textContent = 'Terima kasih! Pesan Anda telah dikirim.';
            formMessage.style.color = 'green';
            contactForm.reset(); // Reset form
        } else {
            formMessage.textContent = 'Harap perbaiki kesalahan di atas.';
            formMessage.style.color = 'red';
        }
    });
});
