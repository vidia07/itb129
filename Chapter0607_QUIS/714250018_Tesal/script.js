// Dapatkan elemen slider
const portfolioSlider = document.querySelector('.portfolio-slider');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

// --- 1. Hero Section: Parallax Effect (Tambahan: Opsional untuk Parallax Jendela) ---
// CSS sudah mengimplementasikan Parallax Sederhana (background-attachment: fixed)
// Jika ingin parallax yang lebih interaktif (mengubah posisi/skala saat scroll):
document.addEventListener('scroll', () => {
    const heroContent = document.querySelector('.hero-content');
    let scrollPosition = window.scrollY;

    // Geser konten hero sedikit ke atas saat scroll
    // Jarak 0.5 di sini adalah faktor pergerakan (semakin kecil, semakin lambat)
    heroContent.style.transform = `translateY(${scrollPosition * 0.5}px)`; 
    // Atau ubah opacity
    heroContent.style.opacity = 1 - (scrollPosition / 500);
});

// --- 2. Portfolio Slider (Geser Otomatis & Manual Navigasi) ---
let portfolioIndex = 0;
const portfolioItems = document.querySelectorAll('.portfolio-item');

// Fungsi geser
const slidePortfolio = (index) => {
    // Hitung jarak geser berdasarkan lebar item (misal 100% dari item + gap)
    const itemWidth = portfolioItems[0].offsetWidth + 20; // 20px gap
    portfolioSlider.scrollLeft = index * itemWidth;
};

// Navigasi Manual
prevBtn.addEventListener('click', () => {
    portfolioIndex = (portfolioIndex > 0) ? portfolioIndex - 1 : portfolioItems.length - 1;
    slidePortfolio(portfolioIndex);
});

nextBtn.addEventListener('click', () => {
    portfolioIndex = (portfolioIndex < portfolioItems.length - 1) ? portfolioIndex + 1 : 0;
    slidePortfolio(portfolioIndex);
});

// Geser Otomatis
setInterval(() => {
    portfolioIndex = (portfolioIndex < portfolioItems.length - 1) ? portfolioIndex + 1 : 0;
    slidePortfolio(portfolioIndex);
}, 5000); // Ganti setiap 5 detik

// --- 4. Testimoni Slider (Geser Manual Saja) ---
// Karena menggunakan CSS overflow-x: scroll, testimoni sudah bisa di swipe/geser manual.

// --- 5. Form Kontak dengan Validasi JavaScript ---

const contactForm = document.getElementById('contact-form');
const successMessage = document.getElementById('success-message');

contactForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah submit form default

    let isValid = true;
    
    // --- Validasi Nama ---
    const nameInput = document.getElementById('name');
    const nameError = document.getElementById('name-error');
    if (nameInput.value.trim().length < 2) {
        nameError.textContent = 'Nama minimal 2 karakter.';
        isValid = false;
    } else {
        nameError.textContent = '';
    }

    // --- Validasi Email ---
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
        emailError.textContent = 'Format email tidak valid.';
        isValid = false;
    } else {
        emailError.textContent = '';
    }

    // --- Validasi Pesan ---
    const messageInput = document.getElementById('message');
    const messageError = document.getElementById('message-error');
    if (messageInput.value.trim().length < 10) {
        messageError.textContent = 'Pesan terlalu pendek (min. 10 karakter).';
        isValid = false;
    } else {
        messageError.textContent = '';
    }


    if (isValid) {
        // Log data ke konsol (Simulasi pengiriman data)
        console.log('Form data:', {
            name: nameInput.value,
            email: emailInput.value,
            message: messageInput.value
        });
        
        // Tampilkan pesan sukses
        successMessage.textContent = 'Pesan Anda berhasil terkirim! Kami akan segera menghubungi Anda.';
        successMessage.style.display = 'block';

        // Reset form
        contactForm.reset();

        // Sembunyikan pesan sukses setelah 5 detik
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 5000);
    }
});