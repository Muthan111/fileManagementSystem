
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Files</title>
    <link rel="stylesheet" href="../CSS/Filestable.css">
    <link rel="stylesheet" href="../CSS/navbarCSS13.css">
    <link rel="stylesheet" href="../CSS/searchCSS.css">
    <link rel="stylesheet" href="../CSS/bottomBar.css">
</head>
<body>
<nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../websiteFoundation/index.php">Home</a>
        <a href="javascript:void(0)" class="dropdown-btn">Files</a>
        <div class="dropdown-container">
            <a href="../upload/uploadForm.php">Upload Files</a>
            <a href="../websiteFoundation/myfiles.php">My Files</a>
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
        include 'php_functions.php';
        // Fetch uploaded files
        
        if (isset($_SESSION['id'])){
            $sql = "SELECT fileName, filePath FROM files";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                echo "<h2>Uploaded Files</h2>";
                echo "<table border='1'>";
                echo "<tr><th>File Name</th><th>Link</th><th>Donwload</th><th>Delete</th><th>Mark Favourite</th></tr>";
                while($row = $result->fetch_assoc()) {
                    $extension = pathinfo($row["filePath"], PATHINFO_EXTENSION);
                    $target = ($extension == 'docx') ? " target='_blank'" : "";
                    $_SESSION["fileName"] = $row["fileName"];
                    $_SESSION["filePath"] = $row["filePath"];
                    echo "<tr>";
                    echo "<td>" . $row["fileName"] . "</td>";
                    echo "<td><a href='" . $row["filePath"] . "'$target>" . $row["fileName"] . "</a></td>";
                    echo "<td><button onclick=\"window.location.href='../ManageFiles/downloadFile.php?file=" . urlencode($row["filePath"]) . "'\">Download</button></td>";
                    echo "<td><button onclick=\"window.location.href='../ManageFiles/delete.php?file=" . urlencode($row["filePath"]) . "'\">Delete</button></td>";
                    echo "<td><button onclick=\"window.location.href='../ManageFiles/markFavourite.php?file=" . urlencode($row["filePath"]) . "'\">Action3</button></td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<div style='text-align: center; margin-top: 20px;'>";
                echo "<a href='../upload/uploadForm.php'><button>Upload Form</button></a>";
                echo "</div>";
            } else {
                echo "No files found.";
            }
    
            $conn->close();
        }else{
            echo "Please <a href='../userLogin/userLogin.php'>Click Here</a> to log in.";
        }
        
        ?>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <a href="../websiteFoundation/PrivacyPolicy.php">Privacy Policy</a>
        <a href="../websiteFoundation/TermsOfService.php">Terms of Service</a>
    </div>  
    <script src="../navbarScript1.js"></script> 
</body>
</html>