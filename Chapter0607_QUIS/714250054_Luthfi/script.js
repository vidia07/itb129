// Parallax effect for hero
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroBg = document.querySelector('.hero::before');
    if (heroBg) {
        heroBg.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

// Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (header) {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
});

// Testimonials Carousel Logic
const carouselSlide = document.getElementById("carouselSlide");
const carouselIndicators = document.getElementById("carouselIndicators");
const prevBtn = document.querySelector(".carousel-btn.prev");
const nextBtn = document.querySelector(".carousel-btn.next");

if (carouselSlide && carouselIndicators && prevBtn && nextBtn) {
    const cards = carouselSlide.children;
    const totalSlides = cards.length;
    let currentIndex = 0;
    let autoSlideInterval;

    // Create indicators
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("div");
        dot.classList.add("dot");
        if (i === 0) dot.classList.add("active");
        dot.addEventListener("click", () => goToTestimonialSlide(i));
        carouselIndicators.appendChild(dot);
    }

    const dots = document.querySelectorAll(".dot");

    function updateIndicators() {
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    function goToTestimonialSlide(index) {
        currentIndex = index;
        carouselSlide.style.transform = `translateX(-${currentIndex * 100}%)`;
        updateIndicators();
    }

    function nextTestimonialSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        goToTestimonialSlide(currentIndex);
    }

    function prevTestimonialSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        goToTestimonialSlide(currentIndex);
    }

    prevBtn.addEventListener("click", prevTestimonialSlide);
    nextBtn.addEventListener("click", nextTestimonialSlide);

    // Auto slide every 5 seconds
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextTestimonialSlide, 5000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Pause on hover
    carouselSlide.addEventListener("mouseenter", stopAutoSlide);
    carouselSlide.addEventListener("mouseleave", startAutoSlide);

    // Start auto slide
    startAutoSlide();
}

// Portfolio Slider Logic
let portfolioIndex = 0;

function showPortfolioSlide(index) {
    const slides = document.querySelector('.portfolio-slides');
    if (!slides) return;
    const totalSlides = slides.children.length;
    if (index >= totalSlides) index = 0;
    if (index < 0) index = totalSlides - 1;
    slides.style.transform = `translateX(-${index * 100}%)`;
    portfolioIndex = index;
}

function nextPortfolioSlide() {
    showPortfolioSlide(portfolioIndex + 1);
}

function prevPortfolioSlide() {
    showPortfolioSlide(portfolioIndex - 1);
}

// Auto slide for portfolio every 5 seconds
setInterval(nextPortfolioSlide, 5000);

// Form validation
function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name.trim() === '') {
        alert('Name is required.');
        return false;
    }
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email.');
        return false;
    }
    if (message.trim() === '') {
        alert('Message is required.');
        return false;
    }
    alert('Message sent successfully!');
    return true;
}

// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
// klik di luar sidebar untuk menghilangkan navbar
const hamburger = document.querySelector("#hamburger-menu");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});