// Efek Typing pada Hero Title
const typingText = document.getElementById('typing-text');
const text = "Selamat Datang di AI Assistant Masa Depan";
let index = 0;

function typeWriter() {
  if (index < text.length) {
    typingText.innerHTML += text.charAt(index);
    index++;
    setTimeout(typeWriter, 100);
  }
}

// Mobile menu toggle
const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.querySelector('.nav-links');
menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});


// Efek Glow pada Subtitle
window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('glow-text').style.opacity = 1;
  }, 1000);
});

// Scroll otomatis ke bagian fitur
function scrollToFeatures() {
  document.getElementById('features').scrollIntoView({ behavior: 'smooth' });
}

function scrollToHero() {
  document.getElementById('hero').scrollIntoView({ behavior: 'smooth' });
}

// Jalankan animasi typing saat halaman dimuat
window.onload = typeWriter;