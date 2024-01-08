<?php 
    session_start();
    include("./Login/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
    <nav class="sidenav close">
        <header>
            <div class="Logo">
                <div class="image-logo">
                    <img src="./image/butterfly-top-view.png" alt="Logo">
                </div>
                    <div class="text-image-logo">
                        <h1 class="text">Logo</h1>
                    </div>
            </div>
                <i class='bx bxs-chevron-right toggle'></i>
        </header>

            <!-- navigations starts here -->
            <div class="menu">
            <ul class="btn-links">
                <li class="navlink active">
                    <a href="#" onclick="openPage('home')">
                        <i class="bx bx-home-alt icon" ></i>
                        <span class="text">Dashboard</span>
                        </a>
                    </li>
                <li class="navlink ">
                    <a href="#" onclick="openPage('usermanagement')">
                        <i class="bx bxs-user-account icon"></i>
                        <span class="text">User Management</span>
                        </a>
                    </li>
                <li class="navlink ">
                    <a href="#" onclick="openPage('settings')">
                        <i class="bx bxs-cog icon"></i>
                        <span class="text">Settings</span>
                        </a>
                    </li>
                <li class="navlink ">
                    <a href="#" onclick="openPage('aboutsystem')">
                        <i class="bx bx-info-circle icon"></i>
                        <span class="text">About System</span>
                        </a>
                    </li> 
            </ul>
            <a href="test.php">click me</a>
            </div>
    </nav>
    </div>
    <!-- Main-content -->
    <div class="content">
            <div id="home" class="page">
                <h1>Dashboard</h1>
                <p>Welcome User!</p>
                
            </div>
            <div id="usermanagement" class="page">
                <div class="container1">
                <h1>Usermanagement</h1><br>
                    <a href="#" onclick="openModal(1)" id="usermodal" class="adduser">Add User</a>
                </div>
                <div class="usertb">
                <table>
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Actions</th>
                        </tr>
                        <tbody>
                            <?php
                            $Sql="Select * from tbl_user";
                            $result = mysqli_query($con,$Sql);
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $password = $row['password'];
                                    $role = $row['role'];
                                    echo ' <tr>
                                        <th>'.$id.'</th>
                                        <td>'.$username.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$password.'</td>
                                        <td>'.$role.'</td>
                                        <td>                            
                                        <a href="#" onclick="openModal(2)" id="usermodal" class="update">Update</a>
                                        <a href="delete.php?deleteid='.$id.'" class="delete">Delete</a>
                                        </td>
                                    </tr>';
                                }
                            }
                            ?>
                            <div id="myModal1" class="modal">
                                <!-- Modal start here -->
                                <div class="modal-content">
                                <span class="close1" onclick="closeModal(1)">&times;</span><br>
                                <h1>Add New User</h1>
                                <?php

                                    include("./Login/function.php");
                                    
                                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                        // Variables
                                        $username = $_POST['username'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $role = $_POST['role'];
                                    
                                        if (!empty($username) && !empty($email) && !empty($password) && !empty($role) && !is_numeric($username)) {
                                            // Use prepared statements to prevent SQL injection
                                            $query = "INSERT INTO tbl_user (username, email, password, role) VALUES (?, ?, ?, ?)";
                                            $stmt = mysqli_prepare($con, $query);
                                    
                                            mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $role);
                                            
                                            // Execute the statement
                                            if (mysqli_stmt_execute($stmt)) {
                                                echo '<script>alert("User created successfully!");</script>';
                                                                                            
                                            } else {
                                                echo "Error: " . mysqli_stmt_error($stmt);
                                            }
                                    
                                            mysqli_stmt_close($stmt);
                                            mysqli_close($con);
                                        }
                                    }
                                       
                                ?>
                                <form action="" method="post" autocomplete="off" onsubmit="submitForm(event)">
                                    <p>Username:</p>
                                    <input type="text" value="" name="username" required>
                                    <p>Email:</p>
                                    <input type="text" value="" name="email" required>
                                    <p>Password:</p>
                                    <input type="password" value="" name="password" required>
                                    <p>Role:</p>
                                    <select type="text" name="role">
                                        <option value="admin">Admin</option>
                                        <option value="registrar">Registrar</option>
                                    </select><br>

                                    <button type="submit">Create User</button>
                                </form>
                                                                
                                
                            </div>
                            </div>
                            <div id="myModal2" class="modal">
                                <!-- Modal start here -->
                                <div class="modal-content">
                                <span class="close1" onclick="closeModal(2)">&times;</span><br>
                                <h1>Update the user</h1>
                            </div>
                            
                            
                                                                                   
                        </tbody>
                    </thead>
                </table>
                </div>
            </div>
            <div id="settings" class="page">
                <h1>settings</h1>
            </div>
            <div id="aboutsystem" class="page">
                <h1>about system</h1>
            </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>