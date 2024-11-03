
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Files</title>
    <link rel="stylesheet" href="../CSS/Filestable.css">
    <link rel="stylesheet" href="../CSS/navbarCSS13.css">
    <link rel="stylesheet" href="../CSS/searchCSS.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../websiteFoundation/Home.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="../upload/uploadForm.php">Upload Files</a>
            <a href="../websiteFoundationmyfiles.php">My Files</a>
        </div>
        <a href="../websiteFoundation/Favourites.php">Favourites</a>
        <a href="../websiteFoundation/Recycle.php">Recycle</a>
        <a href="../websiteFoundation/Contact.php">Contact</a>
        <a href="javascript:void(0)" class="dropdown-btn" >Profile</a>
        <div class="dropdown-container">
        <a href="../websiteFoundation/Profile.php">View Profile</a>
            <a href="../userLogin/userLogin.php">Login</a>
            <a href="../userRegister/userRegister.php">Register</a>
            <a href="../adminLogin/adminLogin.php">Admin Login</a>
            <a href="../adminRegister/adminRegister.php">Admin Register</a>
            <a href="../admin/adminDashboard.php">Admin dashboard</a>
        </div>
        
        
    </nav>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>
    <form method="post" action="../Search/searchMyFiles.php" class="search-form">
    <label class="search-label">Search</label>
    <input type="text" name="search" placeholder="Search here" class="search-input">
    <input type="submit" name="submit" value="Search" class="search-button">
</form>
    <div class="table-container" id="tableContainer">
        <?php
        include '../sessionManagment/sessionTimeLogout.php';
        INCLUDE "../Database/connectToDatabase.php";
        if (isset($_SESSION['id'])) {
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
        ?>
        <button><a href = "permantlyDelete.php"></a>Empty bin</button>
        <?php
        $conn->close();
        }
        else{
            echo "Please login to view your files.";
            echo "Please <a href='../userLogin/userLogin.php'>Click Here</a> to log in.";
        }
        
        ?>
    </div>

    <script src="../navbarScript1.js"></script> 
</body>
</html>