<?php
include 'sessionTimeLogout.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="../CSS/navbarCSS12.css">
</head>
<body>
    <nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="javascript:void(0)" class="dropdown-btn">Services</a>
        <div class="dropdown-container">
            <a href="#">Service 1</a>
            <a href="#">Service 2</a>
        </div>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </nav>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>

    
    <script src="../navbarScript1.js"></script> 
</body>
</html>
