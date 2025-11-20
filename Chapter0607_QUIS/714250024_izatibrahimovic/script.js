document.addEventListener("DOMContentLoaded", () => {
  const heroSection = document.getElementById("hero");
  const navbar = document.querySelector(".navbar");
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  // **Toggle Navigasi Mobile**
  menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    menuToggle.querySelector("i").classList.toggle("fa-bars");
    menuToggle.querySelector("i").classList.toggle("fa-times");
  });

  // **Efek Parallax Sederhana**
  // Menambahkan class untuk efek 'fixed' background di Hero
  heroSection.style.backgroundAttachment = "fixed";

  // **Ubah Warna Navbar saat Scroll (opsional)**
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.style.backgroundColor = "var(--color-primary)"; // Solid Black
    } else {
      navbar.style.backgroundColor = "rgba(10, 10, 10, 0.95)"; // Semi-transparent Black
    }
  });

  // Panggil fungsi slider dan validasi setelah DOMContentLoaded
  setupPortfolioSlider();
  setupContactFormValidation();
});
function setupPortfolioSlider() {
  const slider = document.querySelector(".portfolio-slider");
  const slides = document.querySelectorAll(".portfolio-slider .slide");
  const prevButton = document.querySelector(".slider-controls .prev");
  const nextButton = document.querySelector(".slider-controls .next");

  // Tentukan lebar geser (misalnya lebar 1 slide + gap)
  const scrollAmount = slides[0].offsetWidth + 30; // lebar slide + 30px gap

  // Tombol Next
  nextButton.addEventListener("click", () => {
    slider.scrollBy({
      left: scrollAmount,
      behavior: "smooth",
    });
    // Jika sudah di ujung, kembali ke awal
    if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 50) {
      setTimeout(() => {
        // Beri waktu geser selesai
        slider.scrollTo({ left: 0, behavior: "smooth" });
      }, 300);
    }
  });

  // Tombol Previous
  prevButton.addEventListener("click", () => {
    slider.scrollBy({
      left: -scrollAmount,
      behavior: "smooth",
    });
  });

  // Tambahkan Auto-Slide (Opsional)
  // setInterval(() => {
  //     nextButton.click();
  // }, 5000);
}
function setupContactFormValidation() {
  const form = document.getElementById("contact-form");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah submit default

    let isValid = true;
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const messageInput = document.getElementById("message");

    // Reset error messages
    document
      .querySelectorAll(".error-message")
      .forEach((span) => (span.textContent = ""));

    // **Validasi Nama**
    if (nameInput.value.trim().length < 2) {
      displayError(nameInput, "Nama harus diisi minimal 2 karakter.");
      isValid = false;
    }

    // **Validasi Email**
    if (!validateEmail(emailInput.value)) {
      displayError(emailInput, "Format email tidak valid.");
      isValid = false;
    }

    // **Validasi Pesan**
    if (messageInput.value.trim().length < 10) {
      displayError(messageInput, "Pesan harus diisi minimal 10 karakter.");
      isValid = false;
    }

    if (isValid) {
      alert("Pesan berhasil terkirim! Tim kami akan segera menghubungi Anda.");
      form.reset(); // Kosongkan form setelah sukses
      // Di sini Anda akan menambahkan AJAX call untuk mengirim data ke server
    }
  });

  function displayError(inputElement, message) {
    const errorSpan = inputElement.nextElementSibling;
    errorSpan.textContent = message;
    inputElement.focus();
  }

  function validateEmail(email) {
    // Regex untuk validasi email sederhana
    const re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
}
