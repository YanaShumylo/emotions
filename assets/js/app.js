document.addEventListener('DOMContentLoaded', () => {

    const buttons = document.querySelectorAll('[data-theme]');
    const body = document.body;

    // отримати cookie
    const savedTheme = document.cookie
        .split('; ')
        .find(row => row.startsWith('site_theme='))
        ?.split('=')[1];

    // застосувати тему при старті
    if (savedTheme) {
        body.className = body.className
            .split(' ')
            .filter(c => !c.startsWith('theme-'))
            .join(' ');

        body.classList.add(savedTheme);
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {

            const theme = btn.dataset.theme;

            // прибрати старі теми
            body.className = body.className
                .split(' ')
                .filter(c => !c.startsWith('theme-'))
                .join(' ');

            // додати нову
            body.classList.add(theme);

            // зберегти cookie
            document.cookie = `site_theme=${theme}; path=/; max-age=31536000`;
        });
    });

    // свайпер для галереї карток
    document.querySelectorAll('.gallerySlider').forEach((el) => {

        if (typeof Swiper !== 'undefined') {

            new Swiper(el, {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,

                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true,
                },

                navigation: {
                    nextEl: el.querySelector('.swiper-button-next'),
                    prevEl: el.querySelector('.swiper-button-prev'),
                },

                breakpoints: {
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });

        }
    });
});