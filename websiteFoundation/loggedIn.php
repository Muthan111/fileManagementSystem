<?php
include '../sessionManagment/session.php';
?>
<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Logged In</title>
                    <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS12.css">
                    <link rel="stylesheet" type="text/css" href="../CSS/loggedInCSS.css">

                    <style>
                        
                    </style>
                </head>
                
                <body>
                <nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="Home.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="../upload/uploadForm.php">Upload Files</a>
            <a href="myfiles.php">My Files</a>
        </div>
        <a href="Favourites.php">Favourites</a>
        <a href="Recycle.php">Recycle</a>
        <a href="Contact.php">Contact</a>
        <a href="Profile.php">Profile</a>
        
    </nav>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>
                    <div class = "div1">
                        <p> You have Successfully Logged in</p>
                    </div>
                    <div>
                        <a href = "Profile.php">
                            <button class = "button1" >Click here to continue</button>
                        </a>
                    </div>
                    <div>
                        <a href = "../sessionManagment/SessionLogout.php">
                            <button class = "button2" >Click here to logout</button>
                        </a>
                    </div>
                    <!-- <p><a href='continue1.php'>Click here to continue</a></p>
                    <br><p><a href='session_logout.php'>Click here to logout</a></p> -->
                    <script src="../navbarScript1.js"></script>
                </body>
                </html>
                      