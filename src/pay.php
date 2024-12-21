<?php
session_start(); 
header('Cache-Control: no cache'); //no cache

$conn = new mysqli("127.0.0.1", "root", "12345678", "shopping_kaspi");

if($conn -> connect_error) {
  die("Connection failed "
    . $conn -> connect_error);
}
$_SESSION['id'] = $_GET['id'];
$id = (int)$_SESSION['id'];

if($id < 10) {$sql = "SELECT * FROM pc_item WHERE id = $id";}
else if($id < 19) {$sql = "SELECT * FROM mobile_item WHERE id = $id";}
else {$sql = "SELECT * FROM tv_item WHERE id = $id";}
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$title = $row[1];
$price = $row[2];
if($id < 10) {$image = "pc/".$row[3];}
else if($id < 19) {$image = "mobile/".$row[3];}
else {$image = "tv/".$row[3];
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaspi Магазин</title>
    <link rel="stylesheet" href="style.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
            <input type="search" id="search-box" placeholder="Поиск товара">
            <button class="bx bx-search"></label>
        </form>
    </header>

    <header class="header-three">
        <nav class="navbar-three">
        </nav>
    </header>
    <section class="body">
        <div id="root" style="display:flex; justify-content:center;">
            <div class='box' style="padding:100px">
            <div class='img-box'>
                <img class = 'images' src = <?php echo  $image ?> id="add-img"></img>
            </div>
            </div>

            <div class="add-box">
                <div class ='bottom'>
                <p id="add-text"><?php echo $title ?></p>

                <div class="price">
                    <p>Цена</p>
                    <h2><?php echo $price ?> ₸<h2>
                </div>
                </div>
                <form action="bank.php" method="post">
                <input type="submit" name="pay" id="pay" value="Оформить сейчас">
                <input type="hidden" name="count" value = <?=$price?>>
                <input type="hidden" name="id" value=<?=$id?>>
                </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>


$(function () {
    $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
        var rating = data.rating;
        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
        $(this).parent().find('.result').text('rating :'+ rating);
        $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
    });
});

    </script>

</body>
</html>