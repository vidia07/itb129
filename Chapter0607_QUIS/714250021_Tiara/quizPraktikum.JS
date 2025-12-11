// Efek berubahnya background navbar saat discroll
const header = document.querySelector('header');
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.style.background = 'rgba(240, 233, 233, 0.7)';
  } else {
    header.style.background = 'rgba(103, 103, 185, 0.64)';
  }
});