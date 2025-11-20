document.addEventListener('DOMContentLoaded', () => {
    // --- 1. Sticky Navbar Logic ---

    const header = document.querySelector('.hero');
    const navBar = document.querySelector('.nav-bar');
    // Tinggi navbar digunakan untuk menentukan kapan navbar menjadi "sticky"
    const navHeight = navBar.offsetHeight;

    function handleScroll() {
        // Jika posisi scrollY (scroll vertikal) lebih besar dari tinggi navbar,
        // tambahkan class 'sticky' ke navbar.
        if (window.scrollY > navHeight) {
            navBar.classList.add('sticky');
            // Menambahkan padding ke body agar konten tidak "melompat"
            document.body.style.paddingTop = $navHeightpx;
        } else {
            navBar.classList.remove('sticky');
            document.body.style.paddingTop = '0';
        }
    }

    // Tambahkan event listener untuk memanggil fungsi handleScroll saat user scroll
    window.addEventListener('scroll', handleScroll);


    // --- 2. Smooth Scrolling for Navigation Links ---

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            // Cek apakah link adalah link navigasi internal
            if (this.getAttribute('href').length > 1) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    // Gunakan behavior: 'smooth' untuk scroll yang halus
                    window.scrollTo({
                        top: targetElement.offsetTop - navHeight, // Sesuaikan dengan tinggi navbar
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});