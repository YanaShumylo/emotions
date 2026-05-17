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

    // FAQ
    document.querySelectorAll('.faq-question').forEach((button) => {

        button.addEventListener('click', () => {

            const faqItem = button.parentElement;

            // закрити інші
            document.querySelectorAll('.faq-item').forEach((item) => {

                if (item !== faqItem) {
                    item.classList.remove('active');
                }

            });

            // toggle поточного
            faqItem.classList.toggle('active');

        });

    });

        // modal
    const modal = document.getElementById('globalModal');
    const modalBody = document.getElementById('globalModalBody');

    document.querySelectorAll('[data-modal-open]').forEach(btn => {

        btn.addEventListener('click', () => {

            const type = btn.dataset.modalOpen;

            modal.classList.add('active');
            document.body.classList.add('modal-open');

            fetch('/wp-admin/admin-ajax.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    action: 'load_modal',
                    type: type
                })
            })
                .then(res => res.text())
                .then(html => {
                    modalBody.innerHTML = html;
                });

        });

    });

    const closeModal = () => {
        modal.classList.remove('active');
        document.body.classList.remove('modal-open');
        modalBody.innerHTML = '';
    };

    document.querySelectorAll('[data-modal-close]').forEach(el => {
        el.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
});