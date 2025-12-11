// Portfolio Slider JS
const slides = document.getElementById("slides");
const prevBtnp = document.querySelector(".slider-btn.prev");
const nextBtnp = document.querySelector(".slider-btn.next");
const totalSlidesp = slides.children.length;
let index = 0;

function showSlide(i) {
  if (i < 0) index = totalSlidesp - 1;
  else if (i >= totalSlidesp) index = 0;
  else index = i;
  slides.style.transform = `translateX(-${index * 100}%)`;
}

prevBtnp.addEventListener("click", () => {
  showSlide(index - 1);
});

nextBtnp.addEventListener("click", () => {
  showSlide(index + 1);
});

// Auto slide every 5 seconds
setInterval(() => {
  showSlide(index + 1);
}, 5000);

// Touch swipe support for portfolio slider
let startX = 0;
let endX = 0;

slides.addEventListener("touchstart", (e) => {
  startX = e.changedTouches[0].screenX;
});

slides.addEventListener("touchend", (e) => {
  endX = e.changedTouches[0].screenX;
  if (endX - startX > 50) {
    // Swipe right
    showSlide(index - 1);
  } else if (startX - endX > 50) {
    // Swipe left
    showSlide(index + 1);
  }
});

// Contact Form Validation
const form = document.getElementById("contactForm");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  // Clear previous error styles/messages
  [...form.elements].forEach((el) => {
    el.style.borderColor = "#333";
  });

  // Validation flags
  let valid = true;
  let message = "";

  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const msg = form.message.value.trim();

  // Name validation
  if (name.length < 3) {
    valid = false;
    form.name.style.borderColor = "red";
    message += "Name must be at least 3 characters.\n";
  }

  // Email validation using regex
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    valid = false;
    form.email.style.borderColor = "red";
    message += "Please enter a valid email address.\n";
  }

  // Message validation
  if (msg.length < 10) {
    valid = false;
    form.message.style.borderColor = "red";
    message += "Message must be at least 10 characters.\n";
  }

  if (valid) {
    alert("Thank you for contacting us, " + name + "! We will reply shortly.");
    form.reset();
  } else {
    alert(message);
  }
});
// Burger toggle
const burger = document.querySelector(".burger");
const menulist = document.getElementById("menu-list");
burger.addEventListener("click", () => {
  burger.classList.toggle("open");
  menulist.classList.toggle("open");
  // update accessibility aria attribute
  const expanded = burger.classList.contains("open");
  burger.setAttribute("aria-expanded", expanded);
});
// Close menu saat klik item menu (opsional)
menulist.querySelectorAll("li a").forEach((link) => {
  link.addEventListener("click", () => {
    if (menulist.classList.contains("open")) {
      menulist.classList.remove("open");
      burger.classList.remove("open");
      burger.setAttribute("aria-expanded", false);
    }
  });
});
// Testimonial Carousel Logic
const carouselSlide = document.getElementById("carouselSlide");
const carouselIndicators = document.getElementById("carouselIndicators");
const prevBtn = document.querySelector(".carousel-btn.prev");
const nextBtn = document.querySelector(".carousel-btn.next");
const cards = carouselSlide.children;
const totalSlides = cards.length;
let currentIndex = 0;
let autoSlideInterval;

// Create indicators
for (let i = 0; i < totalSlides; i++) {
  const dot = document.createElement("div");
  dot.classList.add("dot");
  if (i === 0) dot.classList.add("active");
  dot.addEventListener("click", () => goToSlide(i));
  carouselIndicators.appendChild(dot);
}

const dots = document.querySelectorAll(".dot");

function updateIndicators() {
  dots.forEach((dot, index) => {
    dot.classList.toggle("active", index === currentIndex);
  });
}

function goToSlide(index) {
  currentIndex = index;
  carouselSlide.style.transform = `translateX(-${currentIndex * 100}%)`;
  updateIndicators();
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % totalSlides;
  goToSlide(currentIndex);
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  goToSlide(currentIndex);
}

prevBtn.addEventListener("click", prevSlide);
nextBtn.addEventListener("click", nextSlide);

// Auto slide every 5 seconds
function startAutoSlide() {
  autoSlideInterval = setInterval(nextSlide, 5000);
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}

// Pause on hover
carouselSlide.addEventListener("mouseenter", stopAutoSlide);
carouselSlide.addEventListener("mouseleave", startAutoSlide);

// Start auto slide
startAutoSlide();
