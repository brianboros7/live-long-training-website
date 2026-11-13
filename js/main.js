document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.getElementById('site-nav');
    const items = document.querySelectorAll('.nav-item');

    const closeMenus = () => {
        items.forEach((item) => {
            item.classList.remove('open');
            const button = item.querySelector('.submenu-toggle');
            if (button) button.setAttribute('aria-expanded', 'false');
        });
    };

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const open = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', String(open));
            toggle.textContent = open ? 'Close' : 'Menu';
            if (!open) closeMenus();
        });
    }

    items.forEach((item) => {
        const button = item.querySelector('.submenu-toggle');
        if (!button) return;
        button.addEventListener('click', (event) => {
            event.stopPropagation();
            const willOpen = !item.classList.contains('open');
            closeMenus();
            if (willOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });

    document.addEventListener('click', (event) => {
        if (!event.target.closest('.nav-item')) closeMenus();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeMenus();
    });
});
