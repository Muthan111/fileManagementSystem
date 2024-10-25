<!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Logged In</title>
                    <link rel = "stylesheet" type ="text/css" href = "navbarCSS.css">
                    <link rel="stylesheet" type="text/css" href="loggedInCSS.css">

                    <style>
                        
                    </style>
                </head>
                
                <body>
                    <nav>
                        <!-- The sidebar -->  
                        <div id="mySidenav" class="sidenav">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          <a href="Home.php">Home</a>
                          <a href="myfiles.php">Myfiles</a>
                          <a href="Favourites.php">Favourites</a>
                          <a href="Recycle.php">Recycle</a>
                          <a href="Contact.php">Contact</a>
                          <a href="Profile.php">Contact</a>
                          <!-- <a href="Profile.html">Profile</a> -->
                      </div>
                      
                      <!-- Use any element to open the sidenav -->
                      <span onclick="openNav()">Click here to open</span>
                      
                      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                      <div id="main">
                          ...
                      </div>
                    </nav>
                    <div class = "div1">
                        <p> You have Successfully Logged in</p>
                    </div>
                    <div>
                        <a href = "Profile.php">
                            <button class = "button1" >Click here to continue</button>
                        </a>
                    </div>
                    <div>
                        <a href = "SessionLogout.php">
                            <button class = "button2" >Click here to logout</button>
                        </a>
                    </div>
                    <!-- <p><a href='continue1.php'>Click here to continue</a></p>
                    <br><p><a href='session_logout.php'>Click here to logout</a></p> -->
                    <script src="navbarScript.js"></script>
                </body>
                </html>
                      