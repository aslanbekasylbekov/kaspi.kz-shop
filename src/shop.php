<?php
session_start();
header('Cache-Control: no cache'); //no cache


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaspi Магазин</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


</head>
<body>
    <header class="header-one">
        <a href="#" class="logo"><img src="./images/kaspi-icon.png" alt="" style="width: 50px; height: 50px;"> Kaspi.kz</a>

        <nav class="navbar-one">
            <a href="#clients">Клиентам</a>
            <a href="#business">Бизнесу</a>
            <a href="#gid">Kaspi Гид</a>
        </nav>
    </header>
    <header class="header-two">
        <a href="basket.php" class="search-logo">Корзина</a>
        <form class="search-form">
            <input type="search" id="search-box" placeholder="Поиск товара" autocomplete="off">
            <button class="bx bx-search"></label>
        </form>
    </header>

    <header class="header-three">
        <nav class="navbar-three">

        </nav>
    </header>
    <section class="mobileApp">
        <img src="./images/mobileApp.png" alt="">
    </section>
    <section class="container">
        <div class="slider-wrapper">
            <div class="slider">       
            <div class="slide">
                <form method="post" action="mobile.php">
                <div class="block">
                    <p class="block-tittle">Телефоны и гаджеты</p>
                    <input type="image" src="./images/phones.png" alt="">
                </div>
                </form>
                <div class="block">
                    <p class="block-tittle">Бытовая техника</p>
                    <img src="./images/bytovka.png" alt="">
                </div>
                <form method="post" action="tv.php">
                <div class="block">
                    <p class="block-tittle">ТВ, Аудио, Видео</p>
                    <input type="image" src="./images/tv.png" alt="">
                </div>
                </form>
                <form method="post" action="pc.php">
                <div class="block">
                    <p class="block-tittle">Компьютеры</p>
                    <input type="image" src="./images/pc.png" alt="">
                </div>
                </form>
                <div class="block">
                    <p class="block-tittle">Товары для дома</p>
                    <img src="./images/home.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Красота и здоровье</p>
                    <img src="./images/health.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Детские товары</p>
                    <img src="./images/toys.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Аптека</p>
                    <img src="./images/pharmacy.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Автотовары</p>
                    <img src="./images/auto.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Подарки, товары для праздников</p>
                    <img src="./images/happy.png" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="block">
                    <p class="block-tittle">Спорт, туризм</p>
                    <img src="./images/sport.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Строительство и ремонт</p>
                    <img src="./images/remont.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Одежда</p>
                    <img src="./images/cloth.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Мебель</p>
                    <img src="./images/furniture.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Досуг, книги</p>
                    <img src="./images/books.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Аксессуары</p>
                    <img src="./images/watch.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Товары для животных</p>
                    <img src="./images/dogs.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Украшения</p>
                    <img src="./images/ring.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Канцелярские товары</p>
                    <img src="./images/school.png" alt="">
                </div>
                <div class="block">
                    <p class="block-tittle">Обувь</p>
                    <img src="./images/shoes.png" alt="">
                </div>
            </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Продукты Kaspi.kz</h4>
                    <ul>
                        <li><a href="#">Kaspi Gold</a></li>
                        <li><a href="#">Kaspi Gold для ребенка</a></li>
                        <li><a href="#">Kaspi Red</a></li>
                        <li><a href="#">Kaspi Депозит</a></li>
                        <li><a href="#">Кредит на Покупки </a></li>
                        <li><a href="#">Кредит для ИП</a></li>
                        <li><a href="#">Кредит наличными</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Сервисы Kaspi.kz</h4>
                    <ul>
                        <li><a href="#">Магазин</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Платежи</a></li>
                        <li><a href="#">Мой банк</a></li>
                        <li><a href="#">Переводы</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Госуслуги</a></li>
                        <li><a href="#">Объявления</a></li>
                        <li><a href="#">Kaspi Гид</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Для Бизнеса</h4>
                    <ul>
                        <li><a href="#">Kaspi Pay</a></li>
                        <li><a href="#">Бизнес Кредит</a></li>
                        <li><a href="#">Кредит для ИП</a></li>
                        <li><a href="#">Продавать в Интернет-магазине на Kaspi.kz</a></li>
                        <li><a href="#">Принимать платежи с Kaspi.kz</a></li>
                        <li><a href="#">Kaspi Гид</a></li>
                        <li><a href="#">Кабинет продавца</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>9999 Бесплатно с мобильного</h4>
                    <ul>
                        <li><a href="#">Пользовательское соглашение</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Договор присоединения</a></li>
                        <li><a href="#">Договор по оказанию услуги доставки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <footer class="references">
        <div class="container">
            <div class="row">
                <div class="text">
                    <p>© 2012-2023, ТОО «Kaspi Магазин»</p>
                    <p>Все товарные знаки, размещённые на сайте, являются товарными знаками правообладателя и используются на сайте исключительно в информационных целях</p>
                    <p style="color: rgba(0,0,0,.4);">Корпоративный сайт</p>
                </div>
                <div class="ref-icons">
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-youtube' ></i>
                    <i class='bx bxl-telegram' ></i>
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-vk' ></i>
                    <i class='bx bxl-ok-ru'></i>
                    <i class='bx bxl-linkedin-square' ></i>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>