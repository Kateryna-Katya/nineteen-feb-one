/**
 * Omnix-Deckz AI Blog Engine
 * Vanilla JS Implementation
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // --- 2. HERO ANIMATION (Three.js) ---
    const initHero = () => {
        const container = document.getElementById('hero-canvas');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 2000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        // Создаем частицы (Нейронная сеть)
        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 700; i++) {
            vertices.push(THREE.MathUtils.randFloatSpread(2000)); // x
            vertices.push(THREE.MathUtils.randFloatSpread(2000)); // y
            vertices.push(THREE.MathUtils.randFloatSpread(2000)); // z
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));

        const material = new THREE.PointsMaterial({ 
            color: 0x6d28d9, 
            size: 4,
            transparent: true,
            opacity: 0.6
        });

        const points = new THREE.Points(geometry, material);
        scene.add(points);
        camera.position.z = 1000;

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX - window.innerWidth / 2) / 100;
            mouseY = (e.clientY - window.innerHeight / 2) / 100;
        });

        function animate() {
            requestAnimationFrame(animate);
            points.rotation.x += 0.0005;
            points.rotation.y += 0.001;
            scene.rotation.x += (mouseY * 0.05 - scene.rotation.x) * 0.05;
            scene.rotation.y += (mouseX * 0.05 - scene.rotation.y) * 0.05;
            renderer.render(scene, camera);
        }

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        animate();
    };

    // --- 3. ABOUT SECTION (DNA Methodology - Clicks) ---
    const initAboutNodes = () => {
        const nodes = document.querySelectorAll('.dna-node');
        const displayTitle = document.querySelector('.methodology-info__title');
        const displayDesc = document.querySelector('.methodology-info__desc');

        if (!nodes.length) return;

        nodes.forEach(node => {
            node.addEventListener('click', function() {
                // Активный класс
                nodes.forEach(n => n.classList.remove('active'));
                this.classList.add('active');

                // Данные
                const title = this.getAttribute('data-title');
                const desc = this.getAttribute('data-desc');

                // Анимация текста
                displayTitle.parentElement.style.opacity = '0';
                displayTitle.parentElement.style.transform = 'translateY(10px)';
                
                setTimeout(() => {
                    displayTitle.textContent = title;
                    displayDesc.textContent = desc;
                    displayTitle.parentElement.style.opacity = '1';
                    displayTitle.parentElement.style.transform = 'translateY(0)';
                }, 300);
            });
        });
    };

    // --- 4. MOBILE MENU ---
    const initMobileMenu = () => {
        const toggle = document.getElementById('menuToggle');
        const close = document.getElementById('menuClose');
        const menu = document.getElementById('mobileMenu');
        const links = document.querySelectorAll('.mobile-nav__link');

        if (!toggle || !menu) return;

        const toggleState = (isOpen) => {
            menu.classList.toggle('active', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        };

        toggle.addEventListener('click', () => toggleState(true));
        close.addEventListener('click', () => toggleState(false));
        links.forEach(link => link.addEventListener('click', () => toggleState(false)));
    };

    // --- 5. CONTACT FORM & CAPTCHA ---
    const initForm = () => {
        const form = document.getElementById('contactForm');
        const phoneInput = document.getElementById('phoneInput');
        const captchaLabel = document.getElementById('captcha-task');
        let correctResult;

        if (!form) return;

        // Генерация капчи
        const updateCaptcha = () => {
            const a = Math.floor(Math.random() * 9) + 1;
            const b = Math.floor(Math.random() * 9) + 1;
            correctResult = a + b;
            captchaLabel.textContent = `${a} + ${b}`;
        };
        updateCaptcha();

        // Только цифры в телефоне
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = parseInt(document.getElementById('captchaInput').value);

            if (userAnswer !== correctResult) {
                alert('Ошибка капчи. Попробуйте снова.');
                updateCaptcha();
                return;
            }

            const btn = form.querySelector('button');
            const status = document.getElementById('formStatus');
            
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            // Имитация AJAX
            setTimeout(() => {
                status.classList.add('active');
                form.reset();
                btn.disabled = false;
                btn.innerText = 'Начать сейчас';
                updateCaptcha();
            }, 1200);
        });
    };

    // --- 6. COOKIES ---
    const initCookies = () => {
        const popup = document.getElementById('cookiePopup');
        const acceptBtn = document.getElementById('cookieAccept');

        if (!popup || localStorage.getItem('cookies_accepted')) return;

        setTimeout(() => popup.classList.add('active'), 2000);

        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookies_accepted', 'true');
            popup.classList.remove('active');
        });
    };

    // --- 7. HEADER SCROLL ---
    const initHeader = () => {
        const header = document.querySelector('.header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.padding = '0.8rem 0';
                header.style.boxShadow = '0 10px 30px rgba(0,0,0,0.05)';
            } else {
                header.style.background = 'rgba(250, 250, 249, 0.8)';
                header.style.padding = '1.5rem 0';
                header.style.boxShadow = 'none';
            }
        });
    };

    // ЗАПУСК ВСЕХ МОДУЛЕЙ
    initHeader();
    initHero();
    initAboutNodes();
    initMobileMenu();
    initForm();
    initCookies();
});

// Глобальная функция закрытия статуса формы (для инлайнового onclick)
window.closeStatus = () => {
    document.getElementById('formStatus').classList.remove('active');
};