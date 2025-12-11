// Animasi tombol pada bagian hero
const btn = document.querySelector('.hero button');
btn.addEventListener('click', () => {
  alert('Terima kasih! Anda mengklik tombol.');
});

// Efek berubahnya background navbar saat discroll
const header = document.querySelector('header');
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.style.background = 'rgba(0, 0, 0, 0.7)';
  } else {
    header.style.background = 'rgba(25, 26, 88, 0.05)';
  }
});