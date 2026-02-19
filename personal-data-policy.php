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
            <h1>Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro">
                    <div class="legal-block highlight-block">
                        <h2>1. Общие положения</h2>
                        <p>
                            Настоящая политика обработки персональных данных определяет порядок и условия, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), для обеспечения безопасности данных наших пользователей во Франции и странах ЕС.
                        </p>
                        <p>
                            Мы считаем защиту вашей приватности и экспертную поддержку на всех этапах взаимодействия своим приоритетом. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта <strong><?= $fullDomain ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <div class="terminology-grid">
                        <div class="term-card">
                            <strong>Веб-сайт</strong>
                            <span>Инновационная цифровая инфраструктура <strong><?= $fullDomain ?></strong>.</span>
                        </div>
                        <div class="term-card">
                            <strong>Пользователь</strong>
                            <span>Любой посетитель платформы <strong><?= $domainTitle ?></strong>.</span>
                        </div>
                        <div class="term-card">
                            <strong>Обработка данных</strong>
                            <span>Любое действие (сбор, хранение, аналитика) с использованием передовых технологий.</span>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid-policy">
                        <div class="data-policy-item">
                            <div class="data-policy-item__icon"><i data-lucide="user-check"></i></div>
                            <div class="data-policy-item__text">
                                <strong>Личные данные</strong>
                                <p>Имя, адрес электронной почты, номер телефона для связи.</p>
                            </div>
                        </div>
                        <div class="data-policy-item">
                            <div class="data-policy-item__icon"><i data-lucide="fingerprint"></i></div>
                            <div class="data-policy-item__text">
                                <strong>Технические данные</strong>
                                <p>Анонимные данные о посетителях (файлы «cookie», IP-адрес, данные браузера).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list-styled">
                        <li>
                            <i data-lucide="check-circle"></i>
                            <span>Идентификация Пользователя для предоставления доступа к AI-инструментам.</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle"></i>
                            <span>Установление обратной связи и экспертная поддержка по всем вопросам.</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle"></i>
                            <span>Анализ методологий для улучшения работы блога и инновационных решений.</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle"></i>
                            <span>Информирование о том, что платформа уже доступна в Европе.</span>
                        </li>
                    </ul>
                </div>

                <div class="policy-section">
                    <div class="legal-info-box">
                        <h2>5. Правовые основания</h2>
                        <p>Оператор обрабатывает данные только при наличии вашего добровольного согласия. Мы используем технологии нового поколения для шифрования и защиты информации.</p>
                    </div>
                </div>

                <div class="contact-info-block">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы касательно обработки данных на <strong><?= $domainTitle ?></strong>, наша поддержка готова помочь:</p>
                    <div class="contact-data-grid">
                        <div class="contact-data-item">
                            <span class="label">Пишите нам</span>
                            <a href="mailto:hello@<?= $fullDomain ?>" class="value">hello@<?= $fullDomain ?></a>
                        </div>
                        <div class="contact-data-item">
                            <span class="label">Локация</span>
                            <span class="value">12 Rue de la Paix, Paris, France</span>
                        </div>
                    </div>
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