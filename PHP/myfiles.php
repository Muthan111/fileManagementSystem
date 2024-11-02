
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Files</title>
    <link rel="stylesheet" href="../CSS/table.css">
    <link rel="stylesheet" href="../CSS/navbarCSS12.css">
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
    <div class="table-container" id="tableContainer">
        <?php
        include 'sessionTimeLogout.php';
        INCLUDE "connectToDatabase.php";
        include 'php_functions.php';
        // Fetch uploaded files
        $sql = "SELECT fileName, filePath FROM files";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<h2>Uploaded Files</h2>";
            echo "<table border='1'>";
            echo "<tr><th>File Name</th><th>Link</th><th>Action1</th><th>Action2</th><th>Action3</th></tr>";
            while($row = $result->fetch_assoc()) {
                $extension = pathinfo($row["filePath"], PATHINFO_EXTENSION);
                $target = ($extension == 'docx') ? " target='_blank'" : "";
                $_SESSION["fileName"] = $row["fileName"];
                $_SESSION["filePath"] = $row["filePath"];
                echo "<tr>";
                echo "<td>" . $row["fileName"] . "</td>";
                echo "<td><a href='" . $row["filePath"] . "'$target>" . $row["fileName"] . "</a></td>";
                echo "<td><button onclick=\"window.location.href='downloadFile.php?file=" . urlencode($row["filePath"]) . "'\">Download</button></td>";
                echo "<td><button onclick=\"window.location.href='delete.php?file=" . urlencode($row["filePath"]) . "'\">Delete</button></td>";
                echo "<td><button onclick=\"window.location.href='markFavourite.php?file=" . urlencode($row["filePath"]) . "'\">Action3</button></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<div style='text-align: center; margin-top: 20px;'>";
            echo "<a href='uploadForm.php'><button>Upload Form</button></a>";
            echo "</div>";
        } else {
            echo "No files found.";
        }

        $conn->close();
        ?>
    </div>

    <script src="../navbarScript1.js"></script> 
</body>
</html>