<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Files</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="navbarCSS.css">
</head>
<body>
    <div id="myNavbar" class="navbar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="Home.php">Home</a>
        <a href="myfiles.php">Myfiles</a>
        
        <a href="Favourites.php">Favourites</a>
        <a href="Recycle.php">Recycle</a>
        <a href="Contact.php">Contact</a>
        <a href="Profile.php">Profile</a>
      <!-- <a href="Profile.html">Profile</a> -->
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Navbar</span>

    <div class="table-container" id="tableContainer">
        <?php
        INCLUDE "connectToDatabase.php";
        // Fetch uploaded files
        $sql = "SELECT Name, path FROM files";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<h2>Uploaded Files</h2>";
            echo "<table border='1'>";
            echo "<tr><th>File Name</th><th>Link</th><th>Action1</th><th>Action2</th><th>Action3</th></tr>";
            while($row = $result->fetch_assoc()) {
                $extension = pathinfo($row["path"], PATHINFO_EXTENSION);
                $target = ($extension == 'docx') ? " target='_blank'" : "";
                echo "<tr>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td><a href='" . $row["path"] . "'$target>" . $row["Name"] . "</a></td>";
                echo "<td><button onclick=\"window.location.href='downloadFile.php?file=" . urlencode($row["path"]) . "'\">Download</button></td>";
                echo "<td><button onclick=\"window.location.href='delete.php?file=" . urlencode($row["path"]) . "'\">Delete</button></td>";
                echo "<td><button onclick=\"window.location.href=''\">Action3</button></td>";
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

    <script>
        function openNav() {
            document.getElementById("myNavbar").style.left = "0";
            document.getElementById("tableContainer").classList.add("shifted");
        }

        function closeNav() {
            document.getElementById("myNavbar").style.left = "-250px";
            document.getElementById("tableContainer").classList.remove("shifted");
        }
    </script>
</body>
</html>