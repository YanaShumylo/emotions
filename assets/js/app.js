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

});