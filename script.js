// Инициализация иконок Lucide
lucide.createIcons();

// Базовая логика хедера
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.style.padding = '1rem 0';
        header.style.boxShadow = '0 10px 30px rgba(0,0,0,0.05)';
    } else {
        header.style.padding = '1.5rem 0';
        header.style.boxShadow = 'none';
    }
});

// Заготовка под мобильное меню
const menuToggle = document.getElementById('menuToggle');
menuToggle.addEventListener('click', () => {
    console.log('Mobile menu triggered');
    // Здесь будет анимация появления меню
});
// --- Three.js Hero Animation ---
const initHeroScene = () => {
    const container = document.getElementById('hero-canvas');
    if (!container) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    
    renderer.setSize(window.innerWidth, window.innerHeight);
    container.appendChild(renderer.domElement);

    // Создаем геометрию частиц (нейронная сеть)
    const geometry = new THREE.BufferGeometry();
    const vertices = [];
    for (let i = 0; i < 500; i++) {
        vertices.push(THREE.MathUtils.randFloatSpread(2000)); // x
        vertices.push(THREE.MathUtils.randFloatSpread(2000)); // y
        vertices.push(THREE.MathUtils.randFloatSpread(2000)); // z
    }
    geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));

    const material = new THREE.PointsMaterial({ 
        color: 0x6d28d9, 
        size: 3,
        transparent: true,
        opacity: 0.4
    });

    const points = new THREE.Points(geometry, material);
    scene.add(points);

    camera.position.z = 1000;

    // Анимация при движении мыши
    let mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX - window.innerWidth / 2) / 100;
        mouseY = (e.clientY - window.innerHeight / 2) / 100;
    });

    const animate = () => {
        requestAnimationFrame(animate);
        
        points.rotation.x += 0.001;
        points.rotation.y += 0.001;
        
        // Плавное следование за мышью
        scene.rotation.x += (mouseY * 0.05 - scene.rotation.x) * 0.05;
        scene.rotation.y += (mouseX * 0.05 - scene.rotation.y) * 0.05;

        renderer.render(scene, camera);
    };

    animate();

    // Ресайз
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
};

// Запуск после загрузки
window.addEventListener('DOMContentLoaded', () => {
    initHeroScene();
    lucide.createIcons();
});
// --- Interactive Case Cards ---
const initCaseHover = () => {
    const cards = document.querySelectorAll('.case-card');
    cards.forEach(card => {
        const originalBg = 'var(--white)';
        const hoverBg = card.getAttribute('data-bg');

        card.addEventListener('mouseenter', () => {
            // Плавная смена фона самой карточки через CSS переход
            card.style.backgroundColor = hoverBg;
        });

        card.addEventListener('mouseleave', () => {
            card.style.backgroundColor = originalBg;
        });
    });
};

window.addEventListener('DOMContentLoaded', () => {
    // ... предыдущие инициализации
    initCaseHover();
});