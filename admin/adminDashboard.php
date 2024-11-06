
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
        <a href="../websiteFoundation/Home.php">Home</a>
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
        <?php
        include '../sessionManagment/sessionTimeLogout.php';
        INCLUDE "../Database/connectToDatabase.php";
        // include 'php_functions.php';
        // Fetch uploaded files
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        if (isset($_SESSION['adminId'])){
            if ($result->num_rows > 0) {
                // Output data of each row
                echo "<h2>User Data</h2>";
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Username</th><th>Action1</th><th>Action2</th><th>Action3</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["userName"] . "</td>";
                    echo "<td><button onclick=\"window.location.href='../adminFunctions/editUser.php?id=" . urlencode($row["id"]) . "'\">Edit</button></td>";
                    echo "<td><button onclick=\"window.location.href='../adminFunctions/deleteUser.php?id=" . urlencode($row["id"]) . "'\">Delete</button></td>";
                    echo "<td><button onclick=\"openViewModal('" . $row["id"] . "', '" . $row["Name"] . "', '" . $row["email"] . "', '" . $row["userName"] . "')\">View</button></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No users found.";
            }
        
            $conn->close();
        }
        else {
            echo "You are not authorized to view this page.";
        }
        ?>
        
    </div>
    <!-- View User Modal -->
<div id="viewUserModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeViewModal()">&times;</span>
        <h2>View User</h2>
        <p><strong>ID:</strong> <span id="viewUserId"></span></p>
        <p><strong>Name:</strong> <span id="viewUserName"></span></p>
        <p><strong>Email:</strong> <span id="viewUserEmail"></span></p>
        <p><strong>Username:</strong> <span id="viewUserUsername"></span></p>
    </div>
</div>

        <script>
            function openViewModal(id, name, email, username) {
        document.getElementById('viewUserId').innerText = id;
        document.getElementById('viewUserName').innerText = name;
        document.getElementById('viewUserEmail').innerText = email;
        document.getElementById('viewUserUsername').innerText = username;
        document.getElementById('viewUserModal').style.display = 'block';
    }

    function closeViewModal() {
        document.getElementById('viewUserModal').style.display = 'none';
    }
        </script>
    <script src="../navbarScript1.js"></script>
</body>
</html>