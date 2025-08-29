<?php
session_start();
include 'db_connect.php';

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch user basic details
$user_query = "SELECT * FROM users WHERE id='$user_id'";
$user_result = $conn->query($user_query);
$user = $user_result->fetch_assoc();

// Fetch profile details
$profile_query = "SELECT * FROM profiles WHERE user_id='$user_id'";
$profile_result = $conn->query($profile_query);
$profile = $profile_result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Profile | Trisher Looks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
    <h2 class="text-center mb-4">Welcome, <?= htmlspecialchars($user['first_name']) ?>!</h2>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Basic Information
        </div>
        <div class="card-body">
            <p><strong>Full Name:</strong> <?= $user['first_name'] . ' ' . $user['last_name'] ?></p>
            <p><strong>NRC:</strong> <?= $user['nrc'] ?></p>
            <p><strong>DOB:</strong> <?= $user['dob'] ?></p>
            <p><strong>Email:</strong> <?= $user['email'] ?></p>
            <p><strong>Phone:</strong> <?= $user['phone'] ?></p>
            <p><strong>Sex:</strong> <?= $profile['sex'] ?></p>
            <p><strong>Client Type:</strong> <?= $profile['client_type'] ?></p>
            <p><strong>Hobbies:</strong> <?= $profile['hobbies'] ?></p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            Residential Address
        </div>
        <div class="card-body">
            <p><strong>Physical Address:</strong> <?= $profile['physical_address'] ?></p>
            <p><strong>Area:</strong> <?= $profile['area'] ?></p>
            <p><strong>Street:</strong> <?= $profile['street'] ?></p>
            <p><strong>Town:</strong> <?= $profile['town'] ?></p>
            <p><strong>Province:</strong> <?= $profile['province'] ?></p>
            <p><strong>Country:</strong> <?= $profile['country'] ?></p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-dark text-white">
            Bank Details
        </div>
        <div class="card-body">
            <p><strong>Bank Name:</strong> <?= $profile['bank_name'] ?></p>
            <p><strong>Account No:</strong> <?= $profile['bank_account'] ?></p>
            <p><strong>Branch:</strong> <?= $profile['bank_branch'] ?></p>
            <p><strong>Bank Address:</strong> <?= $profile['bank_address'] ?></p>
            <p><strong>Bank Phone:</strong> <?= $profile['bank_phone'] ?></p>
            <p><strong>Bank Email:</strong> <?= $profile['bank_email'] ?></p>
        </div>
    </div>

    <div class="text-center">
        <a href="index.php" class="btn btn-outline-primary">Back to Home</a>
    </div>
</div>
</body>
</html>
