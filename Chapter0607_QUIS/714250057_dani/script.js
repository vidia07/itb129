document.addEventListener('DOMContentLoaded', () => {

    // 1. FITUR AUTO SCROLL 
    const ctaButton = document.querySelector('.cta-button');
    const targetSection = document.getElementById('cta-section');

    if (ctaButton && targetSection) {
        ctaButton.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Menggulir mulus ke bagian CTA
            targetSection.scrollIntoView({ behavior: 'smooth' });
            
            // Feedback visual:
            ctaButton.textContent = 'Mengakses CTA...';
            setTimeout(() => { 
                ctaButton.textContent = 'Mulai Sekarang'; 
            }, 1000);
        });
    }

});