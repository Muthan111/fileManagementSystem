<!DOCTYPE html>
<html>
  <link rel = "stylesheet" type ="text/css" href = "navbarCSS.css">
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
    <a href="Profile.php">Profile</a>
    <!-- <a href="Profile.html">Profile</a> -->
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">Click here to open</span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
    ...
</div>
</nav>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="file" >
  <input type="submit" value="Upload">
</form>
<script src="navbarScript.js"></script> 
</body>
</html