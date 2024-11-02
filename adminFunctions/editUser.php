<?php
include "../Database/connectToDatabase.php";
include "../sessionManagment/sessionTimeLogout.php";

if (isset($_SESSION['adminId'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Handle form submission
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET name = ?, userName = ?, email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $username, $email, $id);

        if ($stmt->execute()) {
            echo "User details updated successfully.";
            header("Location: ../admin/adminDashboard.php");
            exit();
        } else {
            echo "Error updating user details: " . $stmt->error;
        }

        $stmt->close();
    } else if (isset($_GET['id'])) {
        // Fetch user details for editing
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $username = $row['userName'];
            $email = $row['email'];
        } else {
            echo "User not found.";
        }

        $stmt->close();
    } else {
        echo "User ID not provided.";
    }
} else {
    echo "You are not authorized to view this page.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Edit User</h2>
    <form action="editUser.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>