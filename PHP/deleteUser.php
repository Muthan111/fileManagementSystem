<?php
include "connectToDatabase.php";
include "sessionTimeLogout.php";
if (isset($_SESSION['adminId'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id);
        if ($stmt->execute()) {
            echo "User deleted successfully.";
            header("Location: adminDashboard.php");
            exit();
        } else {
            echo "Error deleting user: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "User ID not provided.";
    }
} else {
    echo "You are not authorized to view this page.";
}
?>