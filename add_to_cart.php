<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        echo "Please login to add items to cart.";
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Check if item already in cart
    $check_sql = "SELECT * FROM cart WHERE user_id='$user_id' AND product_name='$product_name'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // Update quantity
        $conn->query("UPDATE cart SET quantity = quantity + $quantity WHERE user_id='$user_id' AND product_name='$product_name'");
    } else {
        // Insert new item
        $conn->query("INSERT INTO cart (user_id, product_name, product_image, price, quantity) 
                      VALUES ('$user_id', '$product_name', '$product_image', '$price', '$quantity')");
    }

    echo "Item added to cart!";
}
?>
