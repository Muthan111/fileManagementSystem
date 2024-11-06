<?php
include '../sessionManagment/sessionTimeLogout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/Homestyles.css">
    <link rel="stylesheet" href="../CSS/navbarCSS13.css">
    <link rel="stylesheet" href="../CSS/bottomBar.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../websiteFoundation/index.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="../upload/uploadForm.php">Upload Files</a>
            <a href="../websiteFoundation/myfiles.php">My Files</a>
        </div>
        <a href="../websiteFoundation/Favourites.php">Favourites</a>
        <a href="../websiteFoundation/Recycle.php">Recycle</a>
        <a href="../websiteFoundation/Contact.php">Contact</a>
        <a href="javascript:void(0)" class="dropdown-btn" >Profile</a>
        <div class="dropdown-container">
        <a href="../websiteFoundation/Profile.php">View Profile</a>
            <a href="../userLogin/userLogin.php">Login</a>
            <a href="../userRegister/userRegister.php">Register</a>
            <a href="../adminLogin/adminLogin.php">Admin Login</a>
            <a href="../adminRegister/adminRegister.php">Admin Register</a>
            <a href="../admin/adminDashboard.php">Admin dashboard</a>
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
    <div class="bottom-bar">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <a href="../websiteFoundation/PrivacyPolicy.php">Privacy Policy</a>
        <a href="../websiteFoundation/TermsOfService.php">Terms of Service</a>
    </div>    

    <script src="../navbarScript1.js"></script>
</body>
</html>