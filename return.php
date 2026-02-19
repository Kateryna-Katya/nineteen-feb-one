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
            <span class="section-tag">Financial Security</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent">
                    <div class="policy-hero-card__decor"></div>
                    <p>
                        Мы строим решения, которые меняют правила игры, и ценим доверие наших партнеров. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена прозрачная процедура возврата, 
                        основанная на принципах честности и экспертной поддержке на всех этапах.
                    </p>
                </div>

                <h2 class="policy-subtitle">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                        <h3>Несоответствие AI-логики</h3>
                        <p>Если функционал ассистента на <strong><?= $domainTitle ?></strong> критически не соответствует заявленным техническим характеристикам.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="server-crash"></i></div>
                        <h3>Сбои инфраструктуры</h3>
                        <p>Критические ошибки в цифровой инфраструктуре <strong><?= $fullDomain ?></strong>, которые делают невозможным использование платформы.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="refresh-ccw"></i></div>
                        <h3>Период охлаждения (EU)</h3>
                        <p>Отказ от цифрового контента в течение 14 дней согласно правилам ЕС, если доступ к платформе еще не был активирован.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2 class="policy-subtitle">Процедура запроса</h2>
                    <p class="policy-text">Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini">
                            <span class="step-num">01</span>
                            <p>Письмо на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></p>
                        </div>
                        <div class="step-mini">
                            <span class="step-num">02</span>
                            <p>Тема: «Refund Request – Order ID»</p>
                        </div>
                        <div class="step-mini">
                            <span class="step-num">03</span>
                            <p>Укажите Email и название AI-продукта</p>
                        </div>
                        <div class="step-mini">
                            <span class="step-num">04</span>
                            <p>Опишите причину — это поможет нам стать лучше</p>
                        </div>
                    </div>
                </div>

                <h2 class="policy-subtitle">Сроки и способ зачисления</h2>
                <p class="policy-text">
                    После одобрения вашего запроса экспертами <strong><?= $domainTitle ?></strong>, возврат будет
                    произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента вашего банка во Франции или другой стране Европы.
                </p>

                <div class="warning-block-styled">
                    <div class="warning-block__header">
                        <i data-lucide="shield-alert"></i>
                        <h2>Ограничения</h2>
                    </div>
                    <ul class="legal-list-dots">
                        <li>Запрос подан по истечении 14 календарных дней с момента транзакции.</li>
                        <li>Вы уже использовали более 50% вычислительных мощностей или контента AI-платформы.</li>
                        <li>Технические проблемы на стороне пользователя (несовместимое ПО, проблемы с провайдером).</li>
                        <li>Нарушение условий использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам, связанным с возвратом средств, наша поддержка по всем вопросам на связи:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
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