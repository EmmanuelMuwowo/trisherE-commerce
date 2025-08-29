<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_id = $_POST['cart_id'];
    $quantity = $_POST['quantity'];

    if ($quantity <= 0) {
        // Auto remove if quantity is 0 or less
        $conn->query("DELETE FROM cart WHERE id='$cart_id'");
    } else {
        // Update quantity
        $conn->query("UPDATE cart SET quantity='$quantity' WHERE id='$cart_id'");
    }
}

header("Location: cart.php");
exit;
?>
