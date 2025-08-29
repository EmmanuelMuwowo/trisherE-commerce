<?php
session_start();
include 'db_connect.php';

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<h3 class='text-center text-danger'>Please login to view your cart.</h3>";
    header("Location: login.html");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch cart items for this user
$sql = "SELECT * FROM cart WHERE user_id='$user_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Trisher Looks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .cart-table img { max-width: 70px; height: auto; }
        .cart-summary { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .cart-summary h5 { border-bottom: 1px solid #ddd; padding-bottom: 10px; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">Trisher Looks</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="cart.php">Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="payment.html">Payment</a></li>
                <li class="nav-item"><a class="btn btn-primary btn-sm" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Cart Section -->
<section class="container py-5">
    <h2 class="text-center">Your Shopping Cart</h2>
    <div class="row g-4">
        <div class="col-lg-8">
            <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered cart-table bg-white">
                <thead class="table-light">
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price (ZMW)</th>
                        <th>Quantity</th>
                        <th>Subtotal (ZMW)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    while ($row = $result->fetch_assoc()):
                        $subtotal = $row['price'] * $row['quantity'];
                        $total += $subtotal;
                    ?>
                    <tr>
                        <td><img src="<?= $row['product_image']; ?>" alt="Product Image"></td>
                        <td><?= $row['product_name']; ?></td>
                        <td><?= number_format($row['price'], 2); ?></td>
                        <td>
                            <form method="POST" action="update_cart.php" class="d-inline">
                                <input type="hidden" name="cart_id" value="<?= $row['id']; ?>">
                                <input type="number" name="quantity" value="<?= $row['quantity']; ?>" min="1" class="form-control" style="max-width:70px; display:inline-block;">
                                <button type="submit" class="btn btn-sm btn-outline-success"><i class="fas fa-sync"></i></button>
                            </form>
                        </td>
                        <td><?= number_format($subtotal, 2); ?></td>
                        <td>
                            <form method="POST" action="remove_from_cart.php">
                                <input type="hidden" name="cart_id" value="<?= $row['id']; ?>">
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p class="text-center text-danger">Your cart is empty.</p>
            <?php endif; ?>
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-4">
            <div class="cart-summary">
                <h5>Cart Summary</h5>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Subtotal</span>
                        <strong>ZMW <?= number_format($total, 2); ?></strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Shipping</span>
                        <strong>ZMW 50.00</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>ZMW <?= number_format($total + 50, 2); ?></strong>
                    </li>
                </ul>
                <a href="payment.html" class="btn btn-primary w-100">Proceed to Payment</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 Trisher Looks | All Rights Reserved</p>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
