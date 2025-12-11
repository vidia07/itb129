document.addEventListener("DOMContentLoaded", () => {
  const heroSection = document.getElementById("hero");
  const navbar = document.querySelector(".navbar");
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    menuToggle.querySelector("i").classList.toggle("fa-bars");
    menuToggle.querySelector("i").classList.toggle("fa-times");
  });

  heroSection.style.backgroundAttachment = "fixed";

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.style.backgroundColor = "var(--color-primary)";
    } else {
      navbar.style.backgroundColor = "rgba(10, 10, 10, 0.95)";
    }
  });

  setupPortfolioSlider();
  setupContactFormValidation();
});
