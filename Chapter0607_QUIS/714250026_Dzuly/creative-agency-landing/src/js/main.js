// This file contains the main JavaScript functionality for the landing page, including event listeners and initialization of components like the portfolio slider and testimonials.

document.addEventListener('DOMContentLoaded', () => {
    // Initialize the portfolio slider
    initPortfolioSlider();

    // Initialize testimonials
    initTestimonials();

    // Add event listeners for smooth scrolling
    setupSmoothScroll();
});

function initPortfolioSlider() {
    const container = document.querySelector('.portfolio-slider');
    if (!container) return;
    const track = container.querySelector('.slides-track');
    const slides = Array.from(container.querySelectorAll('.slide'));
    const prevBtn = container.querySelector('.slider-btn.prev');
    const nextBtn = container.querySelector('.slider-btn.next');
    const indicatorsWrap = container.querySelector('.slider-indicators');
    let current = 0;
    let autoplayInterval = null;
    const AUTOPLAY_MS = 4500;

    // build indicators
    slides.forEach((s, i) => {
        const btn = document.createElement('button');
        btn.setAttribute('aria-label', `Slide ${i + 1}`);
        if (i === 0) btn.classList.add('active');
        btn.addEventListener('click', () => goTo(i));
        indicatorsWrap.appendChild(btn);
    });

    const indicators = Array.from(indicatorsWrap.children);

    function update() {
        const offset = -current * container.clientWidth;
        track.style.transform = `translateX(${offset}px)`;
        indicators.forEach((b, i) => b.classList.toggle('active', i === current));
    }

    function goTo(index) {
        current = (index + slides.length) % slides.length;
        update();
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    // autoplay
    function startAutoplay() {
        stopAutoplay();
        autoplayInterval = setInterval(next, AUTOPLAY_MS);
    }

    function stopAutoplay() {
        if (autoplayInterval) { clearInterval(autoplayInterval); autoplayInterval = null; }
    }

    // events
    nextBtn && nextBtn.addEventListener('click', () => { next(); resetAutoplay(); });
    prevBtn && prevBtn.addEventListener('click', () => { prev(); resetAutoplay(); });

    container.addEventListener('mouseenter', stopAutoplay);
    container.addEventListener('mouseleave', startAutoplay);

    function resetAutoplay() { stopAutoplay(); startAutoplay(); }

    // touch / swipe support (pointer events)
    let pointerStart = null;
    let pointerX = 0;

    track.addEventListener('pointerdown', (e) => {
        pointerStart = e.clientX;
        pointerX = 0;
        track.setPointerCapture(e.pointerId);
        stopAutoplay();
    });

    track.addEventListener('pointermove', (e) => {
        if (pointerStart === null) return;
        pointerX = e.clientX - pointerStart;
        // small translate while dragging
        track.style.transition = 'none';
        track.style.transform = `translateX(${ -current * container.clientWidth + pointerX }px)`;
    });

    track.addEventListener('pointerup', (e) => {
        if (pointerStart === null) return;
        track.style.transition = '';
        if (Math.abs(pointerX) > container.clientWidth * 0.18) {
            if (pointerX < 0) next(); else prev();
        } else {
            goTo(current);
        }
        pointerStart = null;
        pointerX = 0;
        resetAutoplay();
    });

    // resize: keep correct position
    window.addEventListener('resize', () => update());

    // initial
    update();
    startAutoplay();
}

function initTestimonials() {
    // Use horizontal scroll + drag-to-scroll for testimonial cards (.testimonial-list)
    const container = document.querySelector('.testimonial-list');
    if (!container) return;

    // Enable pointer dragging for desktop and touch
    let isDown = false;
    let startX = 0;
    let scrollLeft = 0;

    container.addEventListener('pointerdown', (e) => {
        isDown = true;
        container.classList.add('is-dragging');
        startX = e.clientX;
        scrollLeft = container.scrollLeft;
        container.setPointerCapture(e.pointerId);
    });

    container.addEventListener('pointermove', (e) => {
        if (!isDown) return;
        const x = e.clientX;
        const walk = x - startX; // positive when moving right
        container.scrollLeft = scrollLeft - walk;
    });

    function endDrag(e) {
        isDown = false;
        container.classList.remove('is-dragging');
        try { if (e && e.pointerId) container.releasePointerCapture(e.pointerId); } catch (err) {}
    }

    container.addEventListener('pointerup', endDrag);
    container.addEventListener('pointercancel', endDrag);

    // Accessibility: allow arrow keys to move between cards when focused
    container.tabIndex = 0;
    container.addEventListener('keydown', (e) => {
        const key = e.key;
        const step = container.clientWidth * 0.5;
        if (key === 'ArrowRight') { container.scrollBy({ left: step, behavior: 'smooth' }); }
        if (key === 'ArrowLeft') { container.scrollBy({ left: -step, behavior: 'smooth' }); }
    });
}

function setupSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}