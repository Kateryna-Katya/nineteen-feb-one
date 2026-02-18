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