<?php include(__DIR__ . '/src/views/header.php'); ?>

<main>
	<?php
	$sections = ['intro', 'advantages', 'opportunities'];

	foreach ($sections as $section) {
		require __DIR__ . '/src/views/' . $section . '.php';
	}
	?>

    <!-- Progress -->
    <section id="progress">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="section-title section-title--primary section-title--progress">
                        Dreamtrips в цифрах
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="progress-item">
                        <div id="progress-counter1" class="progress-item__counter">0</div>
                        <p>
                            Наш клуб объединяет представителей из 25 стран мира
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="progress-item">
                        <div id="progress-counter2" class="progress-item__counter">0</div>
                        <p>
                            процентов клиентов попробовав клубный отдых DREAMTRIPS остаются с нами навсегда.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="progress-item">
                        <div id="progress-counter3" class="progress-item__counter">0</div>
                        <p>
                            Детально подобранных dreamtrips путешествий
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="progress-item">
                        <div id="progress-counter4" class="progress-item__counter">0</div>
                        <p>
                            Участников проекта объединеных любовью к путешествиям и новым ощущениям
                        </p>
                    </div>
                </div>
            </div>
            <div class="decor-line decor-line--progress">
                <span class="decor-line__text">Наши возможности</span>
            </div>
        </div>
        <div class="decor-text">
            <span class="text-bold">DREAM</span>TRIPS
        </div>
    </section>

    <!-- Explanation -->
    <section id="explanation">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-5 ml-auto mr-0">
                    <div class="explanation-item">
                        <h2 class="section-title section-title--secondary section-title--explanation">
                            Как это работает
                        </h2>
                        <p>
                            Вам доступны эксклюзивные, гарантированно самые лучшие цены на:
                        <ul class="explanation-list list-unstyled">
                            <li class="explanation-list-item">
                                туры все включено в любой части мира
                            </li>
                            <li class="explanation-list-item">
                                путешествия и морские круизы
                            </li>
                            <li class="explanation-list-item">
                                авиаперелеты любых авиакомпаний и из любых аэропортов мира
                                DreamTrips Rewards program
                            </li>
                            <li class="explanation-list-item">
                                отели, хостелы в любой части нашей земли.
                            </li>
                        </ul>
                        </p>
                        <a href="#" class="btn btn-light open-participate">
                            хочу участвовать
                        </a>
                    </div>
                </div>
            </div>
            <div class="decor-line decor-line--explanation">
                <span class="decor-line__text">Как это работает</span>
            </div>
        </div>
    </section>

    <!-- Stages -->
    <section id="stages">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-5 order-2 order-sm-1">
                    <div class="stages-item">
                        <h2 class="section-title section-title--primary section-title--stages mb-5">
                            Участие
                        </h2>
                        <ul class="stages-item-list list-unstyled">
                            <li class="stages-item-list-cell">
                                Вы оставляете заявку.
                            </li>
                            <li class="stages-item-list-cell">
                                Менеджер с вами связывается и предоставляет всю необходимую информацию о проекте.
                            </li>
                            <li class="stages-item-list-cell">
                                Вы выбераете формат участия.
                            </li>
                            <li class="stages-item-list-cell">
                                Поздравляем, вы член большой семьи Dreamtrips
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-6 ml-auto mr-0 order-1 order-sm-2">
                    <div class="stages-img"
                         style="background-image: url('images/content/stages/stages-item-1.jpg');"></div>
                </div>
            </div>
            <div class="decor-line decor-line--stages">
                <span class="decor-line__text">Этапы работы</span>
            </div>
        </div>
    </section>

    <!-- Packages -->
    <section id="packages">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="section-title section-title--primary section-title--packages">
                        Пакеты участия
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-start">
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <div class="packages-card">
                        <div class="card-header card-header--gold">
                            <h3 class="card-header__title">
                                Gold
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="card-body-list list-unstyled">
                                <li class="card-body-list-item">
                                    Access to DreamTrips, DreamDays, DreamNights and VolunTours
                                </li>
                                <li class="card-body-list-item">
                                    DreamTrips extras: airport transfers, welcome receptions, hosts, excursions and
                                    activities
                                </li>
                                <li class="card-body-list-item">
                                    DreamTrips Rewards program
                                </li>
                                <li class="card-body-list-item">
                                    RateShrinker
                                </li>
                                <li class="card-body-list-item">
                                    Exclusive travel deals year-round
                                </li>
                                <li class="card-body-list-item">
                                    Flight accident insurance3
                                </li>
                                <li class="card-body-list-item">
                                    DreamTrips Exclusive Deals
                                </li>
                                <li class="card-body-list-item">
                                    DreamTrips Local
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer__price">
                                <span class="font-weight-bold">$56.99</span> USD
                            </div>
                            <div class="card-footer__data">
                                per month
                            </div>
                            <a href="#" class="btn btn-primary open-packages-gold">
                                хочу участвовать
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <div class="packages-card">
                        <div class="card-header card-header--platinum">
                            <h3 class="card-header__title">
                                Platinum
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="card-body-list list-unstyled">
                                <li class="card-body-list-item card-body-list-item--other card-body-list-item--other__gold">
                                    "Gold"+
                                </li>
                                <li class="card-body-list-item">
                                    Seven-day advance booking access
                                    to all DreamTrips
                                </li>
                                <li class="card-body-list-item">
                                    Access to DreamTrips, DreamDays, DreamNights and VolunTours
                                </li>
                                <li class="card-body-list-item">
                                    Trip-specific Upgrades on Many DreamTrips, such as resort credits, room
                                    upgrades, lift tickets, green fees, spa discounts, culinary classes and more.
                                </li>
                                <li class="card-body-list-item">
                                    Ability to use 50 percent more DreamTrips Points on DreamTrips
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer__price">
                                <span class="font-weight-bold">$99.99</span> USD
                            </div>
                            <div class="card-footer__data">
                                per month
                            </div>
                            <a href="#" class="btn btn-primary open-packages-platinum">
                                хочу участвовать
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="decor-line decor-line--packages">
                <span class="decor-line__text">Пакеты</span>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal modal-participate">
        <div class="modal-header">
            <div class="close-modal">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>
        </div>
        <div class="modal-body">
            <h3 class="modal-body__title mb-4">
                Хочу участвовать
            </h3>
            <form id="form-participate" method="post" action="/send.php">
                <div class="form-row d-flex flex-column align-items-center">
                    <div class="form-group mb-4">
                        <label for="user-name--participate" class="label-placeholder">
                            Ваше имя
                        </label>
                        <input type="text" name="name" class="form-control" id="user-name--participate"
                               placeholder="Введите ваше имя"
                               required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-email--participate" class="label-placeholder">
                            Ваш Еmail
                        </label>
                        <input type="email" name="email" class="form-control" id="user-email--participate"
                               placeholder="Введите EMAIL" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-phone--participate" class="label-placeholder">
                            Номер вашего телефона
                        </label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--participate"
                               placeholder="Введите Номер" required>
                    </div>
                </div>
                <div class="warranty mb-3">
                    Гарантия низкой цены - найдете такой же тур дешевле у любого другого
                    тур оператора,
                    на такие же даты, то Вы полетите бесплатно!
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">
                        ХОЧУ УЧАСТВОВАТЬ
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal modal-packages modal-packages--gold">
        <div class="modal-header">
            <div class="close-modal">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>
        </div>
        <div class="modal-body">
            <h3 class="modal-body__title mb-4">
                Вы выбрали паКЕТ “Gold”
            </h3>
            <form id="form-packages--gold">
                <div class="form-row d-flex flex-column align-items-center">
                    <div class="form-group mb-4">
                        <label for="user-name--packages--gold" class="label-placeholder">
                            Ваше имя
                        </label>
                        <input type="text" name="name" class="form-control" id="user-name--packages--gold"
                               placeholder="Введите ваше имя" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-email--packages--gold" class="label-placeholder">
                            Ваш Еmail
                        </label>
                        <input type="email" name="email" class="form-control" id="user-email--packages--gold"
                               placeholder="Введите EMAIL" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-phone--packages--gold" class="label-placeholder">
                            Номер вашего телефона
                        </label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--packages--gold"
                               placeholder="Введите Номер" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">
                        Перейти к оплате
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal modal-packages modal-packages--platinum">
        <div class="modal-header">
            <div class="close-modal">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>
        </div>
        <div class="modal-body">
            <h3 class="modal-body__title mb-4">
                Вы выбрали паКЕТ “Platinum”
            </h3>
            <form id="form-packages--platinum">
                <div class="form-row d-flex flex-column align-items-center">
                    <div class="form-group mb-4">
                        <label for="user-name--packages--platinum" class="label-placeholder">
                            Ваше имя
                        </label>
                        <input type="text" name="name" class="form-control" id="user-name--packages--platinum"
                               placeholder="Введите ваше имя" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-email--packages--platinum" class="label-placeholder">
                            Ваш Еmail
                        </label>
                        <input type="email" name="email" class="form-control" id="user-email--packages--platinum"
                               placeholder="Введите EMAIL" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="user-phone--packages--platinum" class="label-placeholder">
                            Номер вашего телефона
                        </label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--packages--platinum"
                               placeholder="Введите Номер" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">
                        Перейти к оплате
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-mask"></div>

    <!-- Plane -->
    <div class="decor-plane">
        <svg width="30" height="28">
            <use xlink:href="#plane-icon"></use>
        </svg>
    </div>

</main>

<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-lg-3">
                <a href="#" class="logo">
                    <div class="logo__img" style="background-image: url('images/icon/logo/logo.png');"></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mx-auto mx-lg-0">
                <div class="contacts-item">
                    <h2 class="section-title section-title--secondary section-title--footer">
                        Наши контакты
                    </h2>
                    <ul class="contacts-list list-unstyled">
                        <li class="contacts-list-item contacts-list-item--phone">
                            <a href="tel:+380991227700">
                                +380 99 122 77 00
                            </a>
                        </li>
                        <li class="contacts-list-item contacts-list-item--place">
                            ул. Хрещатик 120 г. Киев Украина
                        </li>
                        <li class="contacts-list-item contacts-list-item--email">
                            <a href="#">dreamstrips@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <nav class="footer-nav">
                    <ul class="footer-nav-list list-unstyled d-flex flex-column flex-lg-row justify-content-between align-items-center">
                        <li class="footer-nav-list-item">
                            <a href="#">
                                Lorem Ipsum?
                            </a>
                        </li>
                        <li class="footer-nav-list-item">
                            <a href="#">
                                Наши возможности
                            </a>
                        </li>
                        <li class="footer-nav-list-item">
                            <a href="#">
                                Достижения
                            </a>
                        </li>
                        <li class="footer-nav-list-item">
                            <a href="#">
                                Как это работает
                            </a>
                        </li>
                        <li class="footer-nav-list-item">
                            <a href="#">
                                Пакеты участия
                            </a>
                        </li>
                        <li class="footer-nav-list-item">
                            <a href="#">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer-copyr">
            <div class="row">
                <div class="col-12 d-flex flex-column flex-lg-row justify-content-between align-items-center">
                    <ul class="social-list list-unstyled d-flex">
                        <li class="social-list-item social-list-item--facebook mr-2 mr-sm-3">
                            <a href="https://www.facebook.com/dreamtripsua/" target="_blank">
                                <svg width="15" height="15">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--instagram mr-2 mr-sm-3">
                            <a href="https://www.instagram.com/dreamtrips_ukraine_official/" target="_blank">
                                <svg width="15" height="15">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--youtube">
                            <a href="https://www.youtube.com/channel/UC0tgV8JCzYNxGnjT67KPFEQ?view_as=subscriber"
                               target="_blank">
                                <svg width="15" height="15">
                                    <use xlink:href="#youtube-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyr__item">
                        &copy;<?= date('Y') ?> Все права защищены
                    </div>
                    <div class="footer-copyr__item">
                        Дизайн и разрботка <a href="https://impressionbureau.pro"
                                              target="_blank">Impression.Bureau</a><sup>2018</sup>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-line decor-line--footer"></div>
    </div>
</footer>

<script src="dist/app.js"></script>

</body>

</html>