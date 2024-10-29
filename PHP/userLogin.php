<!DOCTYPE html>
<html lang="en">  
 <title>
 <head>
 <title> Login
 </title>
 
<<<<<<< HEAD:PHP/userLogin.php
 <link rel = "stylesheet" type ="text/css" href = "../CSS/userLoginCSS.css">
 <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS12.css">
=======
 <link rel = "stylesheet" type ="text/css" href = "userLoginCSS.css">
 <link rel = "stylesheet" type ="text/css" href = "navbarCSS12.css">
>>>>>>> d20af327eb68624c3551ffa5f480cff1afd37195:userLogin.php
 <meta charset="utf-8">
</head>
<body>
<script src="navbarScript.js"></script>
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
<<<<<<< HEAD:PHP/userLogin.php
<script src="../navbarScript1.js"></script> 
=======
<script src="navbarScript1.js"></script> 
>>>>>>> d20af327eb68624c3551ffa5f480cff1afd37195:userLogin.php
</body>
</html> 
