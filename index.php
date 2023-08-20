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
                    <a href="#" onclick="openPage('about system')">
                        <i class="bx bx-info-circle icon"></i>
                        <span class="text">About System</span>
                        </a>
                    </li> 
            </ul>
            <a href="./test.php">click me</a>
            </div>
    </nav>
    </div>
    <!-- Main-content -->
    <div class="content">
        <div class="active-content">
            <div id="home" class="page">
                <h1>Dashboard</h1>
            </div>
            <div id="usermanagement" class="page">
                <h1>usermanagement</h1>
            </div>
            <div id="settings" class="page">
                <h1>settings</h1>
            </div>
            <div id="about system" class="page">
                <h1>about system</h1>
            </div>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>