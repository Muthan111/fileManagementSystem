<?php
include 'sessionTimeLogout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/Homestyles.css">
    <link rel="stylesheet" href="../CSS/navbarCSS12.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="Home.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="uploadForm.php">Upload Files</a>
            <a href="myfiles.php">My Files</a>
        </div>
        <a href="Favourites.php">Favourites</a>
        <a href="Recycle.php">Recycle</a>
        <a href="Contact.php">Contact</a>
        <a href="javascript:void(0)" class="dropdown-btn" >Profile</a>
        <div class="dropdown-container">
            <a href="Profile.php">View Profile</a>
            <a href="userLogin.php">Login</a>
            <a href="userRegister.php">Register</a>
        </div>
        
        
    </nav>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>
    
    <!-- Use any element to open the sidenav -->
    
    
    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        <h1>Welcome to Our Website</h1>
        <p>This website is designed to help you manage your files efficiently. Here are some of the features you can explore:</p>
        <ul>
            <li><strong>Home:</strong> Overview of the website and its features.</li>
            <li><strong>My Files:</strong> View and manage your uploaded files.</li>
            <li><strong>Favourites:</strong> Access your favorite files quickly.</li>
            <li><strong>Recycle:</strong> Recover deleted files from the recycle bin.</li>
            <li><strong>Contact:</strong> Get in touch with us for any queries or support.</li>
            <li><strong>Profile:</strong> Manage your user profile and settings.</li>
        </ul>
    </div>
    
<<<<<<< HEAD:PHP/Home.php
    <script src="../navbarScript1.js"></script> 
=======
    <script src="navbarScript1.js"></script> 
>>>>>>> d20af327eb68624c3551ffa5f480cff1afd37195:Home.php
</body>
</html>