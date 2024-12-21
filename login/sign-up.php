<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="sign-up.css">
        <script src = "script.js" defer></script>
        <title>Registration</title>
    </head>
    <body>
        <nav>
        <div class="nav__logo"><img src="https://kaspi.kz/img/Logo.svg" alt="Kaspi.kz" title="Kaspi.kz"></div>
            <div class="user">
                <a href=""><i class="fa-solid fa-globe"></i></a>
            </div>
        </nav>
        <div class="login-box">
            <div class="login-header">
                <header>Join Kaspi.kz Loyalty Program for Free</header>
            </div>
            <div class="info">
                <p>Personal Information</p>
            </div>
        <?php
            if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $number = $_POST["number"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            
            if (empty($name) || empty($surname) || empty($email) || empty($number) || empty($password) || empty($passwordRepeat)) {
                array_push($errors,"All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password)<8) {
                array_push($errors,"Password must be at least 8 charactes long");
            }
            if ($password!==$passwordRepeat) {
                array_push($errors,"Password does not match");
            }
            require_once "db.php";
            $sql = "SELECT * FROM registration WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0) {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{
                
                $sql = "INSERT INTO registration (firstName, lastName, email, phoneNumber, password) VALUES ( ?, ?, ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn); //Инициализирует запрос и возвращает о
                //бъект для использования в mysqli_stmt_prepare
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);//Подготавливает утверждение SQL к выполнению
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sssss",$name, $surname, $email, $number, $passwordHash);// Привязка переменных к параметрам подготавливаемого запроса
                    mysqli_stmt_execute($stmt);//Выполняет подготовленную инструкцию
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                }else{
                    die("Something went wrong");
                }
            }
            }
            ?>
            <form action="sign-up.php" method="post">
                <div class="login-grid">
                    <div class="input-box">
                        <p>Name*</p>
                        <input type="text" class="input-field" name="name" placeholder="Enter">
                    </div>
                    <div class="input-box">
                        <p>Surname*</p>
                        <input type="text" class="input-field" name="surname" placeholder="Enter">
                    </div>
                </div>
                <div class="login-grid">
                    <div class="input-box">
                        <p>Email*</p>
                        <input type="emamil" class="input-field" name="email" placeholder="Enter">
                    </div>
                    <div class="input-box">
                        <p>Phone Number*</p>
                        <input type="tel" class="input-field" name="number" placeholder="+7" required oninput="showPlusSeven()">
                    </div>
                </div>
                <div class="login-grid">
                    <div class="input-box">
                        <p>Password*</p>
                        <input type="password" class="input-field" name="password" placeholder="Enter password">
                    </div>
                    <div class="input-box">
                        <p>Retype Password*</p>
                        <input type="password" class="input-field" name="repeat_password" placeholder="Enter password">
                    </div>
                </div>  
                <div class="forgot">
                    <section>
                        <input type="checkbox">
                        <label for="check">I have read and accept the General Terms and Conditions.</label>
                    </section>
                </div>
                <div class="input-submit">
                    <input type="submit" class="submit-btn" value="Sign up" name="submit">
                </div>
            </form>         
            
            <div class="sign-up-link">
                <p>Already a member?  <a href="index.php" target="_blank">Log in</a></p>
            </div>
        </div>
    </body>
</html>