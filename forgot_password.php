<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    // Check if email exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Update password
        $update = "UPDATE users SET password='$new_password' WHERE email='$email'";
        if ($conn->query($update)) {
            echo "<h4 style='color:green; text-align:center;'>Password updated successfully!</h4>";
            echo "<p style='text-align:center;'><a href='login.html'>Login Now</a></p>";
        } else {
            echo "<h4 style='color:red;'>Something went wrong. Try again.</h4>";
        }
    } else {
        echo "<h4 style='color:red; text-align:center;'>Email not found.</h4>";
    }
}
?>
