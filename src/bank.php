<?php
session_start();


$conn = new mysqli("127.0.0.1", "root", "12345678", "shopping_kaspi");

if($conn -> connect_error) {
  die("Connection failed "
    . $conn -> connect_error);
}
$account = NULL;
$bonus = NULL;
$price = 0;
$bonus = 0;
$name = $_SESSION["name"];
$sql = "SELECT * FROM registration WHERE `firstName` = '$name'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $account =  $row['account'];
    $bonus = $row['bonus'];
}

if(isset($_POST["pay"])){
    $price =(int) $_POST["count"];
    $b = $price * 0.05;
    $account = $account - $price;
    $bonus = $bonus + $b;
    $s = "UPDATE registration SET `account` = '$account', `bonus` = '$bonus' WHERE `firstName` = '$name'";
    mysqli_query($conn, $s);
}

$sql = "SELECT * FROM registration WHERE `firstName` = '$name'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $account =  $row['account'];
    $bonus = $row['bonus'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel = "icon" href ="flyarystan-logo.png">
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Мой Банк</title>
</head>
<body>
    <nav>
        <div class="nav__logo"><img src="https://frankfurt.apollo.olxcdn.com/v1/files/xao5tkphib93-KZ/image;s=600x0;q=50" alt="Kaspi.kz" title="Kaspi.kz"></div>
        <div class="logo__name">Мой Банк</div>  
    </nav>
    <header>
        <div class="kaspi__gold">
            <div class="kaspi__img">
                <img src="https://kaspi.kz/img/gold.svg">
            </div>
            <div class="kaspi__item">
                <div class="kaspi__name">Kaspi Gold</div>
                <div class="kaspi__num"><?php echo $_SESSION["name"];?></div>
            </div>


            <div class="kaspi__account"><?php echo $account." тг"; ?></div>
        </div>
        <div class="kaspi__gold">
            <div class="kaspi__img">
                <img src="https://kaspi.kz/img/red.svg">
            </div>
            <div class="kaspi__items">
                <div class="kaspi__name">Открыть Kaspi Red</div>

            </div>
        </div>
        <div class="kaspi__gold">
            <div class="kaspi__img">
                <img src="https://kaspi.kz/img/deposit.svg">
            </div>
            <div class="kaspi__items">
                <div class="kaspi__name">Открыть Kaspi Депозит</div>
            </div>
        </div>
        <div class="kaspi__gold">
            <div class="kaspi__img">
                <img src="https://kaspi.kz/img/kredit.svg">
            </div>
            <div class="kaspi__items">
                <div class="kaspi__name">Оформить кредит или рассрочку</div>

            </div>
        </div>
        <div class="kaspi__gold">
            <div class="kaspi__img">
                <img src="https://kaspi.kz/img/business.svg">
            </div>
            <div class="kaspi__item">
                <div class="kaspi__name">Kaspi Бонус</div>
                <div class="kaspi__num"><?php echo $_SESSION["name"];?></div>
            </div>

            <div class="kaspi__account"><?php echo  $bonus . " тг"; ?></div>
        </div>
    </header>
    
</body>
</html>