<?php
$siteTitle = 'Фаскон Сервис — автосервис и шиномонтаж в Балашихе';
$siteDescription = 'Автосервис Фаскон Сервис в Балашихе: техобслуживание, диагностика, ремонт двигателя, ходовой, тормозной системы, КПП, АКПП, легковой и грузовой шиномонтаж, запчасти под заказ. Адрес: Автозаводская ул., 21, стр. 7.';
$address = 'Автозаводская ул., 21, стр. 7, микрорайон Железнодорожный, Балашиха';
$mapUrl = 'https://yandex.ru/maps/?text=%D0%A4%D0%B0%D1%81%D0%BA%D0%BE%D0%BD%20%D0%A1%D0%B5%D1%80%D0%B2%D0%B8%D1%81%20%D0%90%D0%B2%D1%82%D0%BE%D0%B7%D0%B0%D0%B2%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F%20%D1%83%D0%BB.%2C%2021%2C%20%D1%81%D1%82%D1%80.%207%2C%20%D0%91%D0%B0%D0%BB%D0%B0%D1%88%D0%B8%D1%85%D0%B0';
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = preg_replace('/[^a-z0-9\.\-:]/i', '', (string)($_SERVER['HTTP_HOST'] ?? 'example.com')) ?: 'example.com';
$baseUrl = $scheme . '://' . $host;
$canonicalUrl = $baseUrl . '/';
$ogImage = $baseUrl . '/assets/img/fascon-service-hero.jpg';
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?= htmlspecialchars($siteDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="preload" href="/assets/css/style.css" as="style">
  <link rel="preload" href="/assets/img/fascon-service-hero.jpg" as="image">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:title" content="<?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($siteDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AutoRepair",
    "name": "Фаскон Сервис",
    "description": "Автосервис и шиномонтаж в Балашихе для легковых и грузовых автомобилей: обслуживание, диагностика, ремонт узлов и запчасти под заказ.",
    "url": "<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>",
    "image": "<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>",
    "telephone": [
      "+7 996 162-12-08",
      "+7 905 555-45-41",
      "+7 930 952-00-39"
    ],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Автозаводская ул., 21, стр. 7",
      "addressLocality": "Балашиха",
      "addressRegion": "Московская область",
      "addressCountry": "RU"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.4",
      "ratingCount": "7",
      "reviewCount": "5"
    },
    "paymentAccepted": [
      "Оплата картой",
      "Оплата наличными",
      "Банковский перевод"
    ],
    "areaServed": [
      {
        "@type": "City",
        "name": "Балашиха"
      },
      {
        "@type": "Place",
        "name": "микрорайон Железнодорожный"
      }
    ],
    "hasMap": "<?= htmlspecialchars($mapUrl, ENT_QUOTES, 'UTF-8'); ?>",
    "makesOffer": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Техническое обслуживание автомобиля"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Компьютерная диагностика автомобиля"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Ремонт двигателя, ходовой, тормозной системы, КПП и АКПП"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Легковой и грузовой шиномонтаж"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Запчасти и комплектующие под заказ"
        }
      }
    ]
  }
  </script>
</head>
<body>
  <a class="skip-link" href="#main">Перейти к содержанию</a>

  <header class="site-header" data-header>
    <div class="container header-inner">
      <a class="brand" href="#top" aria-label="Фаскон Сервис, на главную">
        <span class="brand-mark" aria-hidden="true">FS</span>
        <span>
          <strong>Фаскон Сервис</strong>
          <small>Автосервис и шиномонтаж в Балашихе</small>
        </span>
      </a>

      <nav class="main-nav" id="main-nav" aria-label="Основная навигация" data-nav>
        <a href="#services">Услуги</a>
        <a href="#process">Как работаем</a>
        <a href="#reviews">Отзывы</a>
        <a href="#contacts">Контакты</a>
      </nav>

      <div class="header-actions">
        <a class="header-phone" href="tel:+79055554541" aria-label="Позвонить в приемку Фаскон Сервис">+7 905 555-45-41</a>
        <a class="button button-small button-primary" href="#request">Записаться</a>
        <button class="menu-toggle" type="button" aria-controls="main-nav" aria-expanded="false" data-menu-toggle>
          <span class="visually-hidden">Открыть меню</span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </header>

  <main id="main">
    <section class="hero section" id="top">
      <div class="container hero-grid">
        <div class="hero-copy">
          <p class="eyebrow">Автосервис Балашиха, мкр. Железнодорожный</p>
          <h1>Автосервис и шиномонтаж Фаскон Сервис в Балашихе</h1>
          <p class="hero-lead">Для легковых и грузовых автомобилей: техническое обслуживание, диагностика, ремонт узлов, шиномонтаж и подбор запчастей. Клиенты отмечают чистый теплый сервис, грамотных мастеров и быстрый подход к работе.</p>

          <div class="hero-badges" aria-label="Ключевая информация о сервисе">
            <span>Рейтинг 4,4 на Яндекс Картах</span>
            <span>Балашиха, мкр. Железнодорожный</span>
            <span>Легковой и грузовой шиномонтаж</span>
            <span>Предварительная запись</span>
            <span>Карта, наличные, перевод</span>
          </div>

          <div class="hero-actions">
            <a class="button button-primary" href="#request">Записаться в техцентр</a>
            <a class="button button-secondary" href="tel:+79055554541">Позвонить в приемку</a>
            <a class="text-link" href="tel:+79309520039">Нужен шиномонтаж? Позвонить отдельно</a>
          </div>

          <div class="quick-help" role="note">
            <strong>Не знаете, куда звонить?</strong>
            <span>Опишите проблему — подскажем, с чего начать: приемка, диагностика, шиномонтаж или подбор запчастей.</span>
          </div>
        </div>

        <div class="hero-panel" aria-label="Визуальный блок Фаскон Сервис">
          <img src="/assets/img/fascon-service-hero.jpg" width="1672" height="941" alt="Иллюстративная фотосцена чистого технического центра с рабочей зоной автосервиса" fetchpriority="high">
          <div class="hero-panel-card hero-panel-card-top">
            <span>Приемка</span>
            <strong>+7 905 555-45-41</strong>
          </div>
          <div class="hero-panel-card hero-panel-card-bottom">
            <span>Режим работы</span>
            <strong>уточняйте по телефону</strong>
          </div>
        </div>
      </div>
    </section>

    <section class="section trust-section" aria-labelledby="trust-title">
      <div class="container">
        <div class="section-heading">
          <p class="eyebrow">Почему обращаются</p>
          <h2 id="trust-title">Сервис, куда приезжают не только за ремонтом, но и за нормальным отношением</h2>
        </div>

        <div class="feature-grid">
          <article class="feature-card reveal">
            <span class="card-number">01</span>
            <h3>Чистый и теплый техцентр</h3>
            <p>В отзывах клиенты отдельно отмечают светлое, чистое и теплое помещение сервиса.</p>
          </article>
          <article class="feature-card reveal">
            <span class="card-number">02</span>
            <h3>Грамотные мастера</h3>
            <p>Клиенты пишут, что мастера знают свое дело и подходят к работе внимательно.</p>
          </article>
          <article class="feature-card reveal">
            <span class="card-number">03</span>
            <h3>Можно подождать автомобиль</h3>
            <p>Есть место ожидания, Wi-Fi, чай и кофе — удобно, если работа занимает немного времени.</p>
          </article>
          <article class="feature-card reveal">
            <span class="card-number">04</span>
            <h3>Легковой и грузовой шиномонтаж</h3>
            <p>Можно обратиться по вопросам шиномонтажа для легковых и грузовых автомобилей.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section services-section" id="services" aria-labelledby="services-title">
      <div class="container">
        <div class="section-heading section-heading-row">
          <div>
            <p class="eyebrow">Услуги</p>
            <h2 id="services-title">Что можно сделать в Фаскон Сервис</h2>
          </div>
          <p>Автосервис в Железнодорожном помогает с плановым обслуживанием, диагностикой автомобиля в Балашихе, ремонтом автомобиля и шиномонтажом по отдельным направлениям.</p>
        </div>

        <div class="service-grid">
          <article class="service-card reveal">
            <h3>Техническое обслуживание</h3>
            <p>Плановые работы, диагностика и понятный старт, если проблема пока неясна.</p>
            <ul>
              <li>Замена масла</li>
              <li>Базовое сервисное обслуживание</li>
              <li>Полное сервисное обслуживание</li>
              <li>Компьютерная диагностика автомобиля</li>
            </ul>
            <a class="card-cta" href="tel:+79055554541">Уточнить по телефону</a>
          </article>

          <article class="service-card reveal">
            <h3>Ремонт двигателя и систем</h3>
            <p>Ремонт двигателя в Балашихе, обслуживание систем и связанных узлов.</p>
            <ul>
              <li>Ремонт двигателя</li>
              <li>Замена ГРМ</li>
              <li>Ремонт ГБЦ</li>
              <li>Ремонт системы охлаждения</li>
              <li>Ремонт топливной системы</li>
              <li>Ремонт турбокомпрессора</li>
            </ul>
            <a class="card-cta" href="tel:+79055554541">Уточнить по телефону</a>
          </article>

          <article class="service-card reveal">
            <h3>Ходовая, рулевое и тормоза</h3>
            <p>Диагностика стуков, вибраций, тормозов и рулевого управления.</p>
            <ul>
              <li>Ремонт ходовой части</li>
              <li>Ремонт тормозной системы</li>
              <li>Ремонт шаровых опор</li>
              <li>Ремонт гидроусилителя руля</li>
              <li>Ремонт рулевого редуктора</li>
            </ul>
            <a class="card-cta" href="tel:+79055554541">Уточнить по телефону</a>
          </article>

          <article class="service-card reveal">
            <h3>Трансмиссия и узлы</h3>
            <p>Ремонт КПП, АКПП и узлов, которые влияют на работу автомобиля под нагрузкой.</p>
            <ul>
              <li>Ремонт АКПП</li>
              <li>Ремонт КПП</li>
              <li>Ремонт моста</li>
              <li>Ремонт пневмосистемы</li>
            </ul>
            <a class="card-cta" href="tel:+79055554541">Уточнить по телефону</a>
          </article>

          <article class="service-card reveal">
            <h3>Шиномонтаж и дополнительные работы</h3>
            <p>Сезонный шиномонтаж Балашиха, грузовой шиномонтаж Балашиха и дополнительные работы.</p>
            <ul>
              <li>Легковой шиномонтаж</li>
              <li>Грузовой шиномонтаж</li>
              <li>Сварочные работы</li>
              <li>Ремонт прицепов</li>
              <li>Ремонт выхлопной системы</li>
              <li>Удаление катализаторов</li>
              <li>Ремонт автономных отопителей</li>
            </ul>
            <a class="card-cta" href="tel:+79309520039">Уточнить по телефону</a>
          </article>

          <article class="service-card reveal">
            <h3>Запчасти</h3>
            <p>Запчасти под заказ в Балашихе, подбор шин и консультация менеджера.</p>
            <ul>
              <li>Запчасти и комплектующие под заказ</li>
              <li>Подбор шин</li>
              <li>Консультация менеджера</li>
            </ul>
            <a class="card-cta" href="tel:+79961621208">Уточнить по телефону</a>
          </article>
        </div>
      </div>
    </section>

    <section class="section scenarios-section" aria-labelledby="scenarios-title">
      <div class="container split-layout">
        <div class="section-heading sticky-heading">
          <p class="eyebrow">Когда ехать</p>
          <h2 id="scenarios-title">Запишитесь, если нужно быстро понять, что с автомобилем и сколько потребуется работ</h2>
          <p>Оставьте заявку — с вами свяжутся и подскажут следующий шаг без лишней путаницы.</p>
          <a class="button button-primary" href="#request">Опишите проблему в заявке</a>
        </div>

        <div class="scenario-list">
          <div class="scenario-item reveal">Появился стук, вибрация или посторонний звук</div>
          <div class="scenario-item reveal">Автомобиль стал хуже тормозить</div>
          <div class="scenario-item reveal">Двигатель работает нестабильно</div>
          <div class="scenario-item reveal">Нужна замена масла Балашиха или плановое обслуживание</div>
          <div class="scenario-item reveal">Требуется сезонный шиномонтаж</div>
          <div class="scenario-item reveal">Нужно подобрать запчасти</div>
          <div class="scenario-item reveal">Нужен ремонт прицепа</div>
          <div class="scenario-item reveal">Требуется обслуживание дизельного автомобиля</div>
          <div class="scenario-item reveal">Есть проблема с КПП, АКПП, мостом, ходовой или тормозной системой</div>
        </div>
      </div>
    </section>

    <section class="section process-section" id="process" aria-labelledby="process-title">
      <div class="container">
        <div class="section-heading">
          <p class="eyebrow">Понятный процесс</p>
          <h2 id="process-title">Как проходит обращение в сервис</h2>
        </div>

        <ol class="process-grid">
          <li class="process-step reveal">
            <span>1</span>
            <h3>Вы оставляете заявку или звоните</h3>
            <p>Выберите нужное направление: приемка, шиномонтаж или запчасти.</p>
          </li>
          <li class="process-step reveal">
            <span>2</span>
            <h3>Сервис уточняет задачу</h3>
            <p>Менеджер задает несколько вопросов по автомобилю и проблеме.</p>
          </li>
          <li class="process-step reveal">
            <span>3</span>
            <h3>Автомобиль принимают в работу</h3>
            <p>При необходимости проводится диагностика и осмотр.</p>
          </li>
          <li class="process-step reveal">
            <span>4</span>
            <h3>Согласовываются работы</h3>
            <p>Перед ремонтом понятным языком объясняют, что нужно сделать.</p>
          </li>
          <li class="process-step reveal">
            <span>5</span>
            <h3>Выполняется ремонт или обслуживание</h3>
            <p>Мастера проводят необходимые работы по согласованному объему.</p>
          </li>
          <li class="process-step reveal">
            <span>6</span>
            <h3>Вы забираете автомобиль</h3>
            <p>Оплата возможна картой, наличными или банковским переводом.</p>
          </li>
        </ol>
      </div>
    </section>

    <section class="section tire-section" aria-labelledby="tire-title">
      <div class="container tire-grid">
        <div>
          <p class="eyebrow">Отдельный номер</p>
          <h2 id="tire-title">Легковой и грузовой шиномонтаж в Балашихе</h2>
          <p>В Фаскон Сервис можно обратиться по вопросам легкового и грузового шиномонтажа. Подходит для сезонной замены, ремонта колеса и срочных ситуаций, когда нужно быстро вернуть автомобиль в работу.</p>
          <div class="cta-row">
            <a class="button button-primary" href="tel:+79309520039">Позвонить в шиномонтаж: +7 930 952-00-39</a>
            <a class="button button-ghost" href="#request">Записаться на шиномонтаж</a>
          </div>
        </div>
        <div class="quote-card reveal">
          <img src="/assets/img/fascon-tire-service.jpg" width="1672" height="941" loading="lazy" alt="Иллюстративная фотосцена зоны шиномонтажа с колесом, оборудованием и аккуратной рабочей зоной">
          <p>Клиенты отмечают, что при обращении с пробитым колесом работу выполнили быстро и качественно.</p>
          <span>Из отзыва на Яндекс Картах</span>
        </div>
      </div>
    </section>

    <section class="section parts-section" aria-labelledby="parts-title">
      <div class="container parts-band">
        <div>
          <p class="eyebrow">Запчасти</p>
          <h2 id="parts-title">Запчасти и комплектующие под заказ</h2>
          <p>Если для ремонта нужны детали, можно обратиться к менеджеру по запчастям, шинам и монтажу. Это удобно, когда нужно не просто записаться на ремонт, а сразу понять, какие комплектующие потребуются.</p>
        </div>
        <a class="button button-light" href="tel:+79961621208">Позвонить менеджеру: +7 996 162-12-08</a>
      </div>
    </section>

    <section class="section reviews-section" id="reviews" aria-labelledby="reviews-title">
      <div class="container">
        <div class="section-heading section-heading-row">
          <div>
            <p class="eyebrow">Отзывы</p>
            <h2 id="reviews-title">Что отмечают клиенты</h2>
          </div>
          <p class="rating-note">Рейтинг 4,4, 7 оценок и 5 отзывов. Формулировки ниже — аккуратная выжимка без выдуманных деталей.</p>
        </div>

        <div class="reviews-grid">
          <article class="review-card reveal">
            <span>Из отзыва на Яндекс Картах</span>
            <p>Клиент отмечает приятный, светлый, чистый и теплый сервис, грамотных мастеров, место ожидания, чай и кофе.</p>
          </article>
          <article class="review-card reveal">
            <span>Из отзыва на Яндекс Картах</span>
            <p>Клиент пишет, что сервис светлый, чистый, уютный, а мастера грамотно и быстро решают вопросы.</p>
          </article>
          <article class="review-card reveal">
            <span>Из отзыва на Яндекс Картах</span>
            <p>Клиент обращалась с пробитым колесом — работу сделали быстро и качественно.</p>
          </article>
          <article class="review-card reveal">
            <span>Из отзыва на Яндекс Картах</span>
            <p>Клиент отметил хороший подход к работе.</p>
          </article>
          <article class="review-card reveal">
            <span>Из отзыва на Яндекс Картах</span>
            <p>Клиенту понравился большой чистый сервис, наличие грузового и легкового шиномонтажа.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section form-section" id="request" aria-labelledby="request-title">
      <div class="container request-grid">
        <div class="request-copy">
          <p class="eyebrow">Заявка</p>
          <h2 id="request-title">Оставьте заявку — подскажем, куда лучше обратиться: в приемку, шиномонтаж или к менеджеру по запчастям</h2>
          <p>Если не уверены, с чего начать — опишите задачу. Специалист уточнит детали и подскажет нужное направление.</p>
          <div class="phone-stack" aria-label="Телефоны по направлениям">
            <a href="tel:+79055554541">
              <span>Техцентр, приемка</span>
              <strong>+7 905 555-45-41</strong>
            </a>
            <a href="tel:+79309520039">
              <span>Шиномонтаж</span>
              <strong>+7 930 952-00-39</strong>
            </a>
            <a href="tel:+79961621208">
              <span>Менеджер, запчасти, шины, монтаж</span>
              <strong>+7 996 162-12-08</strong>
            </a>
          </div>
        </div>

        <form class="lead-form" action="/send.php" method="post" novalidate data-lead-form>
          <input type="hidden" name="page" value="/" data-page-field>
          <div class="hp-field" aria-hidden="true">
            <label for="website">Сайт</label>
            <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
          </div>

          <div class="form-grid">
            <div class="form-field">
              <label for="name">Имя <span aria-hidden="true">*</span></label>
              <input id="name" name="name" type="text" autocomplete="name" required minlength="2" maxlength="80" placeholder="Как к вам обращаться">
            </div>

            <div class="form-field">
              <label for="phone">Телефон <span aria-hidden="true">*</span></label>
              <input id="phone" name="phone" type="tel" autocomplete="tel" required inputmode="tel" placeholder="+7 900 000-00-00">
            </div>
          </div>

          <div class="form-field">
            <label for="request_type">Тип обращения <span aria-hidden="true">*</span></label>
            <select id="request_type" name="request_type" required>
              <option value="">Выберите направление</option>
              <option value="Техцентр / приемка">Техцентр / приемка</option>
              <option value="Шиномонтаж">Шиномонтаж</option>
              <option value="Запчасти / шины">Запчасти / шины</option>
              <option value="Диагностика">Диагностика</option>
              <option value="Другое">Другое</option>
            </select>
          </div>

          <div class="form-field">
            <label for="car">Марка и модель автомобиля</label>
            <input id="car" name="car" type="text" autocomplete="off" maxlength="120" placeholder="Например: Ford Transit, Kia Rio">
          </div>

          <div class="form-field">
            <label for="message">Кратко опишите проблему</label>
            <textarea id="message" name="message" rows="4" maxlength="1200" placeholder="Что случилось, какие симптомы, когда удобно приехать"></textarea>
          </div>

          <fieldset class="contact-method">
            <legend>Удобный способ связи</legend>
            <label>
              <input type="radio" name="contact_method" value="Звонок" checked>
              <span>Звонок</span>
            </label>
            <label>
              <input type="radio" name="contact_method" value="WhatsApp">
              <span>WhatsApp</span>
            </label>
            <label>
              <input type="radio" name="contact_method" value="Telegram">
              <span>Telegram</span>
            </label>
          </fieldset>

          <div class="checkbox-group">
            <label class="checkbox-field">
              <input type="checkbox" name="personal_consent" value="1" required>
              <span>Даю согласие на обработку персональных данных по документу <a href="/personal-data-consent.html" target="_blank" rel="noopener">«Согласие на обработку персональных данных»</a>.</span>
            </label>
            <label class="checkbox-field">
              <input type="checkbox" name="policy_consent" value="1" required>
              <span>Я ознакомлен(а) с <a href="/privacy-policy.html" target="_blank" rel="noopener">Политикой обработки персональных данных</a>.</span>
            </label>
          </div>

          <button class="button button-primary button-full" type="submit" data-submit-button>Отправить заявку</button>
          <p class="form-status" role="status" aria-live="polite" data-form-status></p>
        </form>
      </div>
    </section>

    <section class="section contacts-section" id="contacts" aria-labelledby="contacts-title">
      <div class="container contacts-grid">
        <div>
          <p class="eyebrow">Контакты</p>
          <h2 id="contacts-title">Контакты Фаскон Сервис</h2>
          <address><?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></address>
          <p class="worktime"><strong>Режим работы:</strong> уточняйте по телефону</p>

          <div class="contact-cards">
            <a class="contact-card" href="tel:+79961621208">
              <span>Менеджер, запчасти, шины, монтаж</span>
              <strong>+7 996 162-12-08</strong>
            </a>
            <a class="contact-card" href="tel:+79055554541">
              <span>Техцентр, приемка</span>
              <strong>+7 905 555-45-41</strong>
            </a>
            <a class="contact-card" href="tel:+79309520039">
              <span>Шиномонтаж</span>
              <strong>+7 930 952-00-39</strong>
            </a>
          </div>
        </div>

        <div class="contact-info-panel">
          <div>
            <h3>Оплата</h3>
            <ul class="tag-list">
              <li>Картой</li>
              <li>Наличными</li>
              <li>Банковским переводом</li>
            </ul>
          </div>
          <div>
            <h3>Удобства</h3>
            <ul class="tag-list">
              <li>Wi-Fi</li>
              <li>Парковка</li>
              <li>Место ожидания</li>
              <li>Парковка для людей с инвалидностью</li>
            </ul>
          </div>
          <div class="map-placeholder">
            <span>Карта без выдуманных координат</span>
            <p>Откройте адрес в Яндекс Картах и постройте маршрут до сервиса.</p>
            <a class="button button-secondary" href="<?= htmlspecialchars($mapUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Открыть в Яндекс Картах</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section faq-section" aria-labelledby="faq-title">
      <div class="container faq-grid">
        <div class="section-heading">
          <p class="eyebrow">FAQ</p>
          <h2 id="faq-title">Частые вопросы</h2>
        </div>

        <div class="faq-list">
          <details>
            <summary>Можно ли приехать без записи?</summary>
            <p>Лучше предварительно позвонить в приемку или оставить заявку, чтобы уточнить загрузку сервиса и нужное направление.</p>
          </details>
          <details>
            <summary>Делаете ли шиномонтаж?</summary>
            <p>Да, в карточке сервиса указаны легковой и грузовой шиномонтаж. Для записи используйте отдельный номер шиномонтажа.</p>
          </details>
          <details>
            <summary>Можно ли оплатить картой?</summary>
            <p>Да, указана оплата картой, наличными и банковским переводом.</p>
          </details>
          <details>
            <summary>Можно ли заказать запчасти?</summary>
            <p>Да, доступны запчасти и комплектующие под заказ. Для этого лучше связаться с менеджером.</p>
          </details>
          <details>
            <summary>Есть ли гарантия?</summary>
            <p>В карточке сервиса указана гарантия. Конкретные условия лучше уточнить при согласовании работ.</p>
          </details>
          <details>
            <summary>Есть ли место ожидания?</summary>
            <p>Клиенты отмечают место ожидания, чай, кофе и Wi-Fi.</p>
          </details>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-grid">
      <div>
        <strong>Фаскон Сервис</strong>
        <p>Автосервис и шиномонтаж в Балашихе для легковых и грузовых автомобилей.</p>
      </div>
      <div class="footer-links">
        <a href="/privacy-policy.html">Политика обработки персональных данных</a>
        <a href="/personal-data-consent.html">Согласие на обработку персональных данных</a>
      </div>
    </div>
  </footer>

  <nav class="mobile-bottom-bar" aria-label="Быстрые действия">
    <a href="tel:+79055554541">Позвонить</a>
    <a href="#request" data-scroll-target="request">Оставить заявку</a>
  </nav>

  <script src="/assets/js/main.js" defer></script>
</body>
</html>
