
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:PHP/Favourites.php
    <title>Favourites Page</title>
    
    <link rel = "stylesheet" type ="text/css" href = "../CSS/navbarCSS12.css">
</head>
<body>
    
    <nav id="mySidenav" class="sidenav">
=======
    <title>My Files</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="navbarCSS12.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
>>>>>>> d20af327eb68624c3551ffa5f480cff1afd37195:Recycle.php
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
<<<<<<< HEAD:PHP/Favourites.php
      
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main">
          ...
      </div>
    </nav>
    <main>
        
    </main>
    <footer>
        
    </footer>
    <script src="../navbarScript1.js"></script>
=======
    <div class="table-container" id="tableContainer">
        <?php
        include 'sessionTimeLogout.php';
        INCLUDE "connectToDatabase.php";
        // Fetch uploaded files
        $sql = "SELECT DeletecFileName FROM bin";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<h2>Deleted Files</h2>";
            echo "<table border='1'>";
            echo "<tr><th>File Name</th><th>Action2</th><th>Action3</th></tr>";
            while($row = $result->fetch_assoc()) {
                $_SESSION["DeletecFileName"] = $row["DeletecFileName"];
                echo "<tr>";
                echo "<td>" . $row["DeletecFileName"] . "</td>";
                echo "<td><button onclick=\"window.location.href='permantlyDelete.php'\">Delete</button></td>";
                echo "<td><button onclick=\"window.location.href=''\">Action3</button></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<div style='text-align: center; margin-top: 20px;'>";
            
            echo "</div>";
        } else {
            echo "No files found.";
        }

        $conn->close();
        ?>
    </div>

    <script src="navbarScript1.js"></script> 
>>>>>>> d20af327eb68624c3551ffa5f480cff1afd37195:Recycle.php
</body>
</html>