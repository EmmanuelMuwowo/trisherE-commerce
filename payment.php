<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    echo "<h3 class='text-danger text-center'>Please login to proceed with payment.</h3>";
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch total from cart
$sql = "SELECT SUM(price * quantity) AS total FROM cart WHERE user_id='$user_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cart_total = $row['total'] + 50; // Include fixed shipping

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_method = $_POST['payment_method'];

    // Insert payment record
    $conn->query("INSERT INTO payments (user_id, payment_method, total_amount) 
                  VALUES ('$user_id', '$payment_method', '$cart_total')");

    // Clear cart
    $conn->query("DELETE FROM cart WHERE user_id='$user_id'");

    echo "<h3 class='text-success text-center'>Payment successful! Thank you for shopping with Trisher Looks.</h3>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment | Trisher Looks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-4">Confirm Payment</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="payment.php" class="border p-4 bg-light rounded">
                <div class="mb-3">
                    <label class="form-label">Total Amount (including shipping):</label>
                    <input type="text" class="form-control" value="ZMW <?= number_format($cart_total, 2); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Payment Method:</label>
                    <select name="payment_method" class="form-control" required>
                        <option value="">-- Choose Option --</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Mobile Money">Mobile Money</option>
                        <option value="PayPal">PayPal</option>
                        <option value="Cash On Delivery">Cash On Delivery</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Make Payment</button>
            </form>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Trisher Looks | All Rights Reserved</p>
</footer>

</body>
</html>
