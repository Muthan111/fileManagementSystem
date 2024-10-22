<!DOCTYPE html>
<html lang="en">  
 <title>
 <head>
 <title> Login
 </title>
 
 <link rel = "stylesheet" type ="text/css" href = "userLoginCSS.css">
 <link rel = "stylesheet" type ="text/css" href = "navbarCSS.css">
 <meta charset="utf-8">
</head>
<body>
<script src="navbarScript.js"></script>
<nav>
    <!-- The sidebar -->  
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="Home.html">Home</a>
      <a href="myfiles.html">Myfiles</a>
      <a href="Favourites.html">Favourites</a>
      <a href="Recycle.html">Recycle</a>
      <a href="Contact.html">Contact</a>
      <!-- <a href="Profile.html">Profile</a> -->
  </div>
  
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()">Click here to open</span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div id="main">
      ...
  </div>
  </nav>
  <div class = "flexbox">
    <h1>User Login</h1>
    <p>
    </p>
  </div> 
 <div class = "flex_container"> 
  
  <div class ="login">
      <h1>Enter your user details </h1>
      <form action ="loginBackend.php"  method = "post">
          
            
          <!-- <label> Full Name </label>
          <input type = "text" name = "fullName" placeholder = "Enter your full name"> -->

          <!-- <label> Username </label>
          <input type = "text" name = "UserName" placeholder = "Enter your user name"> -->
          <?php if (isset($_GET['error'])) { ?>
              <p c><?php echo $_GET['error']; ?></p>
          <?php } ?> 
          <label> Email </label>
          <input type = "text" name = "email" placeholder = "Enter your email">

          <label> Password </label>
          <input type ="password" name ="passWord" placeholder ="Enter your password">
          
          <button type = "submit"> Login </button>
      </form>
      
      
  </div>    
</div> 
 
</body>
</html> 
