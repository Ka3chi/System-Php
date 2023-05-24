<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="login-background">
    <div class="login-content">
        <div class="login-main">
            <div class="left-login">
                <img src="image/login-image.jpg" alt="login-image">
            </div>
            <div class="right-login">
                <form action="Login.php" method="post" class="login-content">
                    <p>Username:</p>
                    <input type="text" value="" name="UN">
                    <p>Password:</p>
                    <input type="text" value="" name="PS"><br>
                    <button type="submit" >Login</button>
                </form>
                <p id="Forgot"><a href="ForgotPage.php">Forgot Password?</a></p>
                <p id="Register">Don't have an account? <a href="RegisterPage.php">Register here</a></p>
            </div>
        </div>
        <?php
        echo $_POST["UN"];
        echo $_POST["PS"];
        ?>
    </div>
</div>
</body>
</html>