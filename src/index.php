<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel = "icon" href ="">
        <link rel="stylesheet" href="sign-in.css">
        <title>Login Form</title>
        <script src = "script.js" defer></script>
    </head>
    <body>
        <nav>
        <div class="nav__logo"><img src="https://kaspi.kz/img/Logo.svg" alt="Kaspi.kz" title="Kaspi.kz"></div>
            <div class="users">
                <a href=""><i class="fa-solid fa-globe"></i></a>
            </div>
        </nav>
        <div class="login-box">
            <div class="login-header">
                <header>Kaspi.kz Membership Login</header>
            </div>
            <?php
            if (isset($_POST["login"])) {
                $password = $_POST["password"];
                $name = $_POST["name"];
                require_once "db.php";
                $sql = "SELECT * FROM registration WHERE firstName = '$name'";
                
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        $_SESSION["name"] = $user["firstName"];
                        $_SESSION["account"] = $user["account"];
                        $_SESSION["bonus"] = $user["bonus"];
                        $em = "INSERT INTO lastuser VALUES('$user[id]','$user[email]')";
                        if(mysqli_query($conn, $em));
                        header("Location: kaspi.php");
                        die();
                    }else{
                        echo "<div class='alert alert-danger'>Password doesn't match</div>";
                    }
                }else{
                    echo "<div class='alert alert-danger'>Name doesn't match</div>";
                }
            }
            ?>
            <form action="index.php" method="post">
                <div class="input-box">
                    <p>Name*</p>
                    <input type="text" name="name" class="input-field" placeholder="Enter" required>
                </div>
                <div class="input-box">
                    <p>Password*</p>
                    <input type="password" name="password" class="input-field" placeholder="Enter" required>
                </div>
                <div class="forgot">
                    <section>
                        <input type="checkbox">
                        <label for="check">Remember me</label>
                    </section>
                    <section>
                        <a href="#">Forgot password?</a>
                    </section>
                </div>
                <div class="input-submit">
                    <input type="submit" value="Login" name="login" class="submit-btn">
                </div>
            </form>
            <div class="sign-up-link">
                <p>Not a member yet?  <a href="sign-up.php" target="_blank">Sign Up</a></p>
            </div>
        </div>
    </body>
</html>