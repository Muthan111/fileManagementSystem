<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourites Page</title>
    
    <link rel = "stylesheet" type ="text/css" href = "navbarCSS12.css">
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
      
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main">
          ...
      </div>
    </nav>
    <main>
        
    </main>
    <footer>
        
    </footer>
    <script src="navbarScript1.js"></script>
</body>
</html>