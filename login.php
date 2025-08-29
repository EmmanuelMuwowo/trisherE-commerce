<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $passwordInput = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($passwordInput, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['first_name'];
            $_SESSION['role'] = $user['role'];

            // Redirect by role
            if ($user['role'] == 'Staff') {
                header("Location: staff_dashboard.php");
            } else {
                header("Location: index.html");
            }
            exit;
        } else {
            echo "<h4 style='color: red; text-align: center;'>Incorrect password.</h4>";
        }
    } else {
        echo "<h4 style='color: red; text-align: center;'>User not found.</h4>";
    }
}
?>
