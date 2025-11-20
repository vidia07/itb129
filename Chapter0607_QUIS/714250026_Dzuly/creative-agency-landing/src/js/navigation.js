// This file handles the navigation functionality, including smooth scrolling and any interactive elements related to the navigation menu.

document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                const offset = targetSection.getBoundingClientRect().top + window.pageYOffset - document.querySelector('nav').offsetHeight;

                window.scrollTo({
                    top: offset,
                    behavior: 'smooth'
                });
            }
        });
    });
});