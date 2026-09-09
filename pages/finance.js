document.addEventListener('DOMContentLoaded', () => {
    const sr = ScrollReveal({
        origin: 'bottom',
        distance: '40px',
        duration: 1000,
        delay: 200,
        easing: 'ease-in-out',
        reset: false
    });

    sr.reveal('.hero .copy', { origin: 'left', distance: '60px' });
    sr.reveal('.hero .visual', { origin: 'right', distance: '60px', delay: 400 });
    sr.reveal('header', { distance: '40px' });
    sr.reveal('.grid article', { interval: 150 });
    sr.reveal('.partner-text', { origin: 'left', distance: '60px' });
    sr.reveal('.partner-nodes', { origin: 'right', distance: '60px', delay: 200 });
    sr.reveal('.steps > div', { interval: 150 });
    sr.reveal('.contact > div', { interval: 200 });
});