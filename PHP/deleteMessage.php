<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Status</title>
    <link rel="stylesheet" href="deleteMessageStyles.css">
    <link rel="stylesheet" href="navbarCSS12.css">
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
        <a href="Profile.php">Profile</a>
    </nav>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>
    <div class="message-container">
        <?php
        session_start();
        
        if (!isset($_GET['file']) ) {
            echo "<h1>Delete Successful</h1>";
            echo "<p>Your file has been deleted successfully.</p>";
            // Unset the session variable to prevent message from showing again on refresh
            // unset($_SESSION['file']);
        } else {
            echo "<h1>Delete Failed</h1>";
            echo "<p>There was an error deleting your file. Please try again.</p>";
        }
        // ?>
        <a href="myfiles.php">Go back to My Files</a>
    </div>
    <script src="../navbarScript1.js"></script>
</body>
</html>