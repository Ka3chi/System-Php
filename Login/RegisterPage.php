<?php 
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //variables
        $username = $_POST['UN'];
        $email = $_POST['email'];
        $password1 = $_POST['PS'];
        $password2 = $_POST['CPS'];

        if(!empty($username) &&  !empty($email) && !empty($password1) && !empty($password2) && !is_numeric($username)){
            if($password1 != $password2){
                echo "The password doesnt match with confirm password";
            } else{
                //saving data in database
                $query = "Insert into tbl_user(username,email,password) values ('$username','$email','$password1')";

                mysqli_query($con, $query);

                header("Location: index.php");
                die;
            }
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
    <title>Register</title>
</head>
<body>
    <div class="back-btn">
        <a href="login.php">Back</a>
    </div>
        <div class="register-background">
            <div class="register-content">
                <form action="RegisterPage.php" method="post" autocomplete="off">
                    <p>Username:</p>
                    <input type="username" value="" name="UN">
                    <p>Email:</p>
                    <input type="text" value="" name="email">
                    <p>Password:</p>
                    <input type="password" value="" name="PS">
                    <p>Confirm Password:</p>
                    <input type="password" value="" name="CPS"><br>

                    <button type="submit">Register</button>
                </form>
            </div>
    </div>
</body>
</html>