<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="navbarCSS.css">
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <script src="navbarScript.js"></script>
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
        </div>
        
        <!-- Use any element to open the sidenav -->
        <span onclick="openNav()">Click here to open</span>
        
        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
            <h1>Contact Us</h1>
            <p>If you have any questions, feel free to reach out to us by filling out the form below:</p>
            <form action="submitContactForm.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </nav>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>
</html>