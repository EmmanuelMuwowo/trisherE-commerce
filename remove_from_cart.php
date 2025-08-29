<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart_id = $_POST['cart_id'];
    $conn->query("DELETE FROM cart WHERE id='$cart_id'");
}

header("Location: cart.php");
exit;
?>
