document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Мобильное меню
    const menuToggle = document.getElementById('menuToggle');
    const menuClose = document.getElementById('menuClose');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = (state) => {
        mobileMenu.classList.toggle('active', state);
        document.body.style.overflow = state ? 'hidden' : '';
    };

    menuToggle.addEventListener('click', () => toggleMenu(true));
    menuClose.addEventListener('click', () => toggleMenu(false));
    mobileLinks.forEach(link => link.addEventListener('click', () => toggleMenu(false)));

    // 3. Капча
    let captchaResult;
    const initCaptcha = () => {
        const n1 = Math.floor(Math.random() * 10) + 1;
        const n2 = Math.floor(Math.random() * 10) + 1;
        captchaResult = n1 + n2;
        document.getElementById('captcha-task').textContent = `${n1} + ${n2}`;
    };
    initCaptcha();

    // 4. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phoneInput');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    // 5. Обработка формы
    const form = document.getElementById('contactForm');
    const status = document.getElementById('formStatus');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const userCaptcha = parseInt(document.getElementById('captchaInput').value);

        if (userCaptcha !== captchaResult) {
            alert('Неверный ответ капчи!');
            initCaptcha();
            return;
        }

        // Имитация AJAX
        const btn = form.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.textContent = 'Отправка...';

        setTimeout(() => {
            status.classList.add('active');
            form.reset();
            btn.disabled = false;
            btn.textContent = 'Начать сейчас';
            initCaptcha();
        }, 1500);
    });

    window.closeStatus = () => status.classList.remove('active');

    // 6. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const cookieAccept = document.getElementById('cookieAccept');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // 7. Подключение функций из предыдущих этапов
    if (typeof initHeroScene === 'function') initHeroScene();
    if (typeof initCaseHover === 'function') initCaseHover();
    if (typeof initMethodology === 'function') initMethodology();
});