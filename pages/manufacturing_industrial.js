document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();

    // ScrollReveal initialization
    const sr = ScrollReveal({
        origin: 'bottom',
        distance: '20px',
        duration: 600,
        delay: 0,
        easing: 'ease',
        reset: false
    });

    sr.reveal('.mfg-services article', { interval: 100 });
    sr.reveal('.mfg-benefits div', { interval: 100 });
    sr.reveal('.mfg-industry-grid div', { interval: 100 });
    sr.reveal('.mfg-points div', { interval: 100 });

    const nums = document.querySelectorAll("[data-num]");
    const co = new IntersectionObserver(es => {
        es.forEach(e => {
            if (!e.isIntersecting) return;
            const el = e.target, end = +el.dataset.num;
            let n = 0;
            const timer = setInterval(() => {
                n += Math.ceil(end / 45);
                if (n >= end) {
                    n = end;
                    clearInterval(timer);
                }
                el.textContent = n + "+";
            }, 24);
            co.unobserve(el);
        });
    }, { threshold: .6 });
    nums.forEach(n => co.observe(n));
});
