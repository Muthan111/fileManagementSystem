<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <title> Registration Page</title>
    
    <link rel = "stylesheet" type ="text/css" href = "userRegisterCSS.css">
    <link rel = "stylesheet" type ="text/css" href = "navbarCSS.css">
</head>
<body>

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
  <script src="navbarScript.js"></script>
</body>
</html>