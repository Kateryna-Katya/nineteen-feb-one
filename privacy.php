<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновационные AI-решения
    </title>
<link rel="icon"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect x='16' y='2' width='20' height='20' transform='rotate(45 16 2)' fill='%236d28d9'/%3E%3Ccircle cx='16' cy='16' r='4' fill='%23451a03'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="menu-toggle" id="menuToggle" aria-label="Открыть меню">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Privacy & Security</span>
            <h1>Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card">
                    <div class="policy-hero-card__decor"></div>
                    <p>
                        Настоящая политика распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для проектирования AI-ассистентов, так и для других взаимодействий в рамках нашей передовой цифровой инфраструктуры.
                    </p>
                </div>

                <div class="policy-notice">
                    <i data-lucide="info"></i>
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право менять положения Политики. Мы используем решения, которые меняют правила игры в области безопасности. Предоставляя данные, вы даете полное согласие на их обработку для обеспечения экспертной поддержки на всех этапах.
                    </p>
                </div>

                <h2 class="policy-subtitle">Порядок сбора и хранения</h2>
                <div class="storage-info">
                    <div class="storage-item">
                        <div class="storage-item__icon"><i data-lucide="clock"></i></div>
                        <div class="storage-item__text">
                            <span>Срок хранения</span>
                            <strong>до 75 лет</strong>
                        </div>
                    </div>
                    <div class="storage-item">
                        <div class="storage-item__icon"><i data-lucide="shield-check"></i></div>
                        <div class="storage-item__text">
                            <span>Статус безопасности</span>
                            <strong>Только с вашего согласия</strong>
                        </div>
                    </div>
                </div>
                
                <p class="policy-text">
                    Для предотвращения утечки данных мы используем технологию нового поколения и полный комплекс мер информационной безопасности. Уничтожение или блокирование данных в <strong><?= $domainTitle ?></strong> осуществляется по первому запросу клиента.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul class="data-list">
                            <li>IP-адрес и метрики доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и поведение в блоках</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <h3><i data-lucide="fingerprint"></i> Персонализация</h3>
                        <ul class="data-list">
                            <li>Имя пользователя / Никнейм</li>
                            <li>E-mail и контактный телефон</li>
                            <li>Данные о внедренных ботах и услугах</li>
                        </ul>
                    </div>
                </div>

                <h2 class="policy-subtitle">Цели обработки данных</h2>
                <ul class="legal-list-dots">
                    <li>Предоставление доступа к инновационной платформе разработки.</li>
                    <li>Учет пожеланий при создании новых AI-алгоритмов.</li>
                    <li>Информирование о том, что платформа уже доступна в Европе.</li>
                    <li>Обеспечение пассивного дохода через автоматизацию процессов.</li>
                </ul>

                <h2 class="policy-subtitle">Использование Cookies</h2>
                <p class="policy-text">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Франция), чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально бесшовным.
                </p>

                <div class="rights-block">
                    <div class="rights-block__content">
                        <h2>Ваши права</h2>
                        <p>
                            Хотите отредактировать данные или прекратить их обработку? Наша поддержка по всем вопросам на связи:
                        </p>
                    </div>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">
                        <span>hello@<?= $fullDomain ?></span>
                        <i data-lucide="mail"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo logo--light">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__desc">
                    Технологии нового поколения для автоматизации вашего бизнеса во Франции и по всему миру.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#tech">Технологии</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li>
                        <i data-lucide="phone" size="18"></i>
                        <a href="tel:+33189480764">+33 1 89 48 07 64</a>
                    </li>
                    <li>
                        <i data-lucide="mail" size="18"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" size="18"></i>
                        <span>12 Rue de la Paix, 75002 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены.
            </p>
        </div>
    </footer>

    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu__header">
            <div class="logo logo--light"><span class="logo__dot"></span>
                <?= $domainTitle ?>
            </div>
            <button class="menu-close" id="menuClose"><i data-lucide="x"></i></button>
        </div>
        <nav class="mobile-nav">
            <a href="./#home" class="mobile-nav__link">Главная</a>
            <a href="./#tech" class="mobile-nav__link">Технологии</a>
            <a href="./#cases" class="mobile-nav__link">Кейсы</a>
            <a href="./#blog" class="mobile-nav__link">Блог</a>
            <a href="./#about" class="mobile-nav__link">О нас</a>
            <a href="./#contact" class="mobile-nav__link btn btn--primary">Запросить доступ</a>
        </nav>
    </div>

    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                    политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="cookieAccept">Принять</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="script.js"></script>
</body>

</html>