<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <title> Registration Page</title>
    
    <link rel = "stylesheet" type ="text/css" href = "../CSS/userRegisterCSS.css">
    <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS.css">
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
  <div class  = "flexbox" >
    <h1>Please register your details</h1>
      <p> Enter your name, username, email and password</p>
   </div>
  <div class = "flex_container">
  
    <div class = "register">
        <h1> Customer: Enter your details </h1>
        <h1> Register</h1>
        <form action = 'userRegisterBackend.php'  method ='post'>
          <?php if (isset($_GET['error'])){ ?>
                <p class = "error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Full Name</label>
            <input type ="Name" name ="Name" placeholder = "Name" id = "Name"  >
            <label>Email</label>
            <input type ="email" name ="Email" placeholder = "Email" id = "Email" >
            <label> User Name</label>
            <input type = "text" name=" userName" placeholder= "Username" id="userName" >
            <label>Password</label>
            <input type ="password" name ="passWord" placeholder = "passWord" id = "passWord" >
            <input type = "submit" value="Register">
            
        </form>
        <!-- <a href = "user_login_page.php">
      <button class = "outer_button" type = "submit"> Login </button>
      </a> -->
        
    </div>
  </div>  
<<<<<<< HEAD:PHP/userRegister.php
  <script src="../navbarScript1.js"></script> 
=======
  <script src="navbarScript1.js"></script> 
>>>>>>> d20af327eb68624c3551ffa5f480cff1afd37195:userRegister.php
</body>
</html>