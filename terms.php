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
            <span class="section-tag">Legal Foundation</span>
            <h1>Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent">
                    <div class="policy-hero-card__decor"></div>
                    <p>
                        Добро пожаловать в экосистему <strong><?= $domainTitle ?></strong>! Настоящие Условия представляют собой юридический фундамент между вами и платформой года в сфере автоматизации. Используя нашу инфраструктуру, вы открываете новые возможности и принимаете правила игры, описанные ниже.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к передовой цифровой инфраструктуре 
                        <strong><?= $fullDomain ?></strong>, включая: базу знаний по разработке AI-ассистентов, методологии автоматизации и инновационные инструменты для построения высокотехнологичных проектов во Франции и ЕС.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>Для обеспечения стабильности платформы <strong><?= $domainTitle ?></strong>, при использовании ресурсов запрещается:</p>
                    <ul class="legal-list-styled">
                        <li>
                            <i data-lucide="shield-x"></i>
                            <span>Действия, способные нарушить работу или безопасность серверов <strong><?= $domainTitle ?></strong>.</span>
                        </li>
                        <li>
                            <i data-lucide="unplug"></i>
                            <span>Несанкционированное использование автоматизированных скриптов для сбора данных.</span>
                        </li>
                        <li>
                            <i data-lucide="alert-circle"></i>
                            <span>Публикация вредоносного кода или нарушение прав интеллектуальной собственности.</span>
                        </li>
                    </ul>
                </div>

                <div class="legal-block property-block">
                    <div class="property-block__header">
                        <i data-lucide="copyright"></i>
                        <h2>3. Интеллектуальная собственность</h2>
                    </div>
                    <p>
                        Весь контент на <strong><?= $fullDomain ?></strong> (тексты, программный код ботов, графические интерфейсы) является собственностью Компании. Вам предоставляется ограниченная лицензия для личного использования и обучения. Любое копирование технологий, которые меняют правила игры, без нашего согласия запрещено.
                    </p>
                </div>

                <div class="legal-block highlight-block">
                    <h2>4. Ограничение ответственности</h2>
                    <p>
                        Решения <strong><?= $domainTitle ?></strong> предоставляются по принципу <strong>«как есть» (as is)</strong>. Мы обеспечиваем экспертную поддержку на всех этапах, однако не несем ответственности за косвенные убытки, возникшие в результате внедрения предложенных методологий в ваш бизнес.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>5. Разрешение споров</h2>
                    <p>
                        Мы стремимся переосмыслить подход к развитию и решать все вопросы путем конструктивных переговоров. В случае недостижения согласия, все споры рассматриваются в соответствии с законодательством по месту регистрации офиса <strong><?= $domainTitle ?></strong> во Франции.
                    </p>
                </div>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы по работе платформы, свяжитесь с нами:</p>
                    <div class="contact-data-grid">
                        <div class="contact-data-item">
                            <span class="label">Email</span>
                            <a href="mailto:hello@<?= $fullDomain ?>" class="value">hello@<?= $fullDomain ?></a>
                        </div>
                        <div class="contact-data-item">
                            <span class="label">Телефон</span>
                            <a href="tel:+33189480764" class="value">+33 1 89 48 07 64</a>
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