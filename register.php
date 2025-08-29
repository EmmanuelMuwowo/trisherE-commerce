<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get User Info
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nrc = $_POST['nrc'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'Client'; // Default role


    // Address Info
    $physicalAddress = $_POST['physicalAddress'];
    $area = $_POST['area'];
    $street = $_POST['street'];
    $town = $_POST['town'];
    $province = $_POST['province'];
    $country = $_POST['country'];

    // Other Info
    $sex = $_POST['sex'];
    $clientType = $_POST['clientType'];
    $hobbies = $_POST['hobbies'];

    // Bank Info
    $bankName = $_POST['bankName'];
    $bankAccount = $_POST['bankAccount'];
    $bankBranch = $_POST['bankBranch'];
    $bankAddress = $_POST['bankAddress'];
    $bankPhone = $_POST['bankPhone'];
    $bankEmail = $_POST['bankEmail'];

    // Step 1: Insert into users table
    $sqlUser = "INSERT INTO users (first_name, last_name, nrc, dob, email, phone, password, role) 
            VALUES ('$firstName', '$lastName', '$nrc', '$dob', '$email', '$phone', '$password', '$role')";


    if ($conn->query($sqlUser) === TRUE) {
        // Get inserted user ID
        $userId = $conn->insert_id;

        // Step 2: Insert into profiles table
        $sqlProfile = "INSERT INTO profiles (
            user_id, physical_address, area, street, town, province, country,
            sex, client_type, hobbies, bank_name, bank_account,
            bank_branch, bank_address, bank_phone, bank_email
        ) VALUES (
            '$userId', '$physicalAddress', '$area', '$street', '$town', '$province', '$country',
            '$sex', '$clientType', '$hobbies', '$bankName', '$bankAccount',
            '$bankBranch', '$bankAddress', '$bankPhone', '$bankEmail'
        )";

        if ($conn->query($sqlProfile) === TRUE) {
            echo "<h3 style='color: green;'>Registration successful!</h3>";
        } else {
            echo "<h3 style='color: red;'>Error saving profile: " . $conn->error . "</h3>";
        }

    } else {
        echo "<h3 style='color: red;'>Error saving user: " . $conn->error . "</h3>";
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
