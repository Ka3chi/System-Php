<?php
session_start();

    include("connection.php");
    include("function.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //variables
        $username = $_POST['UN'];
        $password1 = $_POST['PS'];

        if(!empty($username) && !empty($password1) && !is_numeric($username)){

                //reading data in database
                $query = "Select * from tbl_user where username = '$username' limit 1";
                $result = mysqli_query($con, $query);

                if($result){
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);
                        if($user_data['password'] === $password1){
                            $_SESSION['username'] = $user_data['username'];
                            header("Location: Home.php");
                            die;
                        }
                    }
                }
                echo "Wrong username and Password!";
            }
        else{
            echo "Please enter the valid information";
        }
    }
?>
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
                <form action="Login.php" method="post" class="login-content" autocomplete="off">
                    <p>Username:</p>
                    <input type="username" value="" name="UN">
                    <p>Password:</p>
                    <input type="password" value="" name="PS">
                    <button type="submit" >Login</button>
                    <p id="Forgot"><a href="ForgotPage.php">Forgot Password?</a></p>
                    <p id="Register">Don't have an account? <a href="RegisterPage.php">Register here</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>