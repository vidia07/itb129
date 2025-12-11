// Reveal-on-scroll for elements with class .service-item and other revealable elements
(function() {
	const selector = '.service-item';
	const items = Array.from(document.querySelectorAll(selector));
	if (!items.length) return;

	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			const el = entry.target;
			if (entry.isIntersecting) {
				// add class to trigger CSS transition
				el.classList.add('in-view');
				// set a small stagger based on index
				const idx = items.indexOf(el);
				el.style.setProperty('--delay', `${idx * 80}ms`);
				// once shown, unobserve to improve performance
				observer.unobserve(el);
			}
		});
	}, {
		root: null,
		rootMargin: '0px 0px -10% 0px',
		threshold: 0.15
	});

	items.forEach((it) => observer.observe(it));
})();