<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trisher Looks - Your go-to store for stylish fashion with free shipping on orders over K150. Shop now!">
    <meta name="keywords" content="fashion, clothes, shoes, online store, shopping">
    <meta name="author" content="Trisher Looks">
    <title>Trisher Looks | Home</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff2c54;
            --secondary-color: #f5f5f5;
            --dark-text: #333333;
            --light-text: #777777;
            --card-radius: 8px;
            --transition-speed: 0.3s;
            --shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: var(--dark-text);
            padding-top: 80px;
        }
        
        /* Header Styles */
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            background: white !important;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: var(--primary-color) !important;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-text) !important;
            transition: color var(--transition-speed);
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .search-container {
            position: relative;
            margin: 0 15px;
            flex-grow: 1;
            max-width: 600px;
        }
        
        .search-input {
            border-radius: 20px;
            padding: 8px 45px 8px 15px;
            border: 1px solid #e5e5e5;
            width: 100%;
            font-size: 14px;
        }
        
        .search-btn {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary-color);
            border: none;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .action-icons {
            display: flex;
            gap: 15px;
            margin-left: 15px;
        }
        
        .action-icon {
            color: var(--dark-text);
            font-size: 18px;
            position: relative;
            transition: color var(--transition-speed);
        }
        
        .action-icon:hover {
            color: var(--primary-color);
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--primary-color);
            color: white;
            font-size: 10px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('assets\images\bg2.jpeg') center/cover no-repeat;
            padding: 120px 0;
            text-align: center;
            color: white;
            margin-bottom: 60px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .hero-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: background-color var(--transition-speed);
        }
        
        .hero-btn:hover {
            background: #e01a4f;
        }
        
        /* Features Section */
        .features-section {
            padding: 60px 0;
            background: var(--secondary-color);
        }
        
        .feature-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: var(--card-radius);
            background: white;
            box-shadow: var(--shadow);
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
            height: 100%;
        }
        
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        /* Promotional Section */
        .promo-section {
            padding: 60px 0;
        }
        
        .promo-card {
            position: relative;
            border-radius: var(--card-radius);
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
        }
        
        .promo-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .promo-card:hover img {
            transform: scale(1.05);
        }
        
        .promo-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
        }
        
        .promo-badge {
            background: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        /* Product Section */
        .product-section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            margin: 15px auto 0;
        }
        
        .product-card {
            border: none;
            border-radius: var(--card-radius);
            overflow: hidden;
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
            margin-bottom: 30px;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .product-image-container {
            position: relative;
            overflow: hidden;
        }
        
        .product-card img {
            object-fit: cover;
            height: 250px;
            width: 100%;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover img {
            transform: scale(1.05);
        }
        
        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--primary-color);
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .card-body {
            padding: 15px;
        }
        
        .product-title {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .product-price {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .rating-stars {
            color: #ffc107;
            font-size: 12px;
        }
        
        .rating-count {
            font-size: 12px;
            color: var(--light-text);
        }
        
        /* Newsletter Section */
        .newsletter-section {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('assets/images/newsletter-bg.jpg') center/cover no-repeat;
            padding: 80px 0;
            color: white;
            text-align: center;
        }
        
        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
        }
        
        .newsletter-input {
            border: none;
            border-radius: 30px;
            padding: 12px 20px;
            width: 100%;
        }
        
        .newsletter-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            margin-top: 15px;
            transition: background-color var(--transition-speed);
        }
        
        .newsletter-btn:hover {
            background: #e01a4f;
        }
        
        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #adb5bd;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-title {
            color: white;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: color var(--transition-speed);
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
        }
        
        .payment-methods {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 15px;
        }
        
        .payment-icon {
            background: white;
            width: 40px;
            height: 25px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }
        
        .social-icon {
            color: #adb5bd;
            font-size: 20px;
            transition: color var(--transition-speed);
        }
        
        .social-icon:hover {
            color: white;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-collapse {
                background: white;
                padding: 15px;
                border-radius: var(--card-radius);
                box-shadow: var(--shadow);
                margin-top: 10px;
            }
            
            .search-container {
                margin: 10px 0;
                max-width: 100%;
            }
            
            .action-icons {
                margin-left: 0;
                justify-content: center;
                margin-top: 10px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header / Navbar -->
    <header class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Trisher Looks</a>
            
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search for products...">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kids</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                
                <div class="action-icons">
                    <a href="#" class="action-icon"><i class="far fa-user"></i></a>
                    <a href="#" class="action-icon"><i class="far fa-heart"></i></a>
                    <a href="cart.html" class="action-icon">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count">3</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Welcome to Trisher Looks</h1>
            <p class="hero-subtitle">Discover the latest trends in fashion with our exclusive collection</p>
            <a href="shop.html" class="hero-btn">Shop Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h3>Free Delivery</h3>
                        <p>On orders over K150</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>We're here for you anytime</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <h3>Easy Refunds</h3>
                        <p>Get refunded within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Section -->
    <section class="promo-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="promo-card" style="height: 300px;">
                        <img src="assets/images/f-box-1.jpeg" alt="Jewelry Collection">
                        <div class="promo-content">
                            <span class="promo-badge">2025 Party</span>
                            <h3>Jewelry Collection</h3>
                            <p>Trend Alert - Shop the latest styles</p>
                            <a href="#" class="btn btn-sm btn-warning">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="promo-card" style="height: 300px;">
                        <img src="assets/images/f-box-2.jpg" alt="Footwear Collection">
                        <div class="promo-content">
                            <span class="promo-badge">2025 Trend</span>
                            <h3>Footwear Collection</h3>
                            <p>Bold & Black - Make a statement</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="promo-card" style="height: 400px;">
                        <img src="assets/images/f-box-3.jpg" alt="New Collection">
                        <div class="promo-content">
                            <span class="promo-badge">New Arrivals</span>
                            <h2>Spring Collection 2025</h2>
                            <p>Discover the latest trends in fashion</p>
                            <a href="shop.html" class="btn btn-primary">Shop Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div class="container">
            <h2 class="section-title">Latest Products</h2>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card">
                        <div class="product-image-container">
                            <span class="product-badge">New</span>
                            <img src="assets/images/NB.jpg" alt="New Balance 740 black">
                        </div>
                        <div class="card-body">
                            <h6 class="product-title">New Balance 740 black</h6>
                            <div class="product-price">ZMW 290.00</div>
                            <div class="product-rating">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-count">(24)</span>
                            </div>
                            <a href="product-details.html?id=1" class="btn btn-primary btn-sm w-100 mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card">
                        <div class="product-image-container">
                            <span class="product-badge sale">Sale</span>
                            <img src="assets/images/dress_2.jpeg" alt="Yellow Maxi Dress">
                        </div>
                        <div class="card-body">
                            <h6 class="product-title">Yellow Maxi Dress</h6>
                            <div class="product-price">ZMW 330.00</div>
                            <div class="product-rating">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="rating-count">(42)</span>
                            </div>
                            <a href="product-details.html?id=2" class="btn btn-primary btn-sm w-100 mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card">
                        <div class="product-image-container">
                            <span class="product-badge">New</span>
                            <img src="assets/images/product-img-1.jpg" alt="Smart Shirts">
                        </div>
                        <div class="card-body">
                            <h6 class="product-title">Smart Shirts First Class</h6>
                            <div class="product-price">ZMW 260.00</div>
                            <div class="product-rating">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-count">(18)</span>
                            </div>
                            <a href="product-details.html?id=3" class="btn btn-primary btn-sm w-100 mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card">
                        <div class="product-image-container">
                            <span class="product-badge popular">Popular</span>
                            <img src="assets/images/product-img-2.jpg" alt="Smart Shoes">
                        </div>
                        <div class="card-body">
                            <h6 class="product-title">Artificial Leather Smart Shoes</h6>
                            <div class="product-price">ZMW 420.00</div>
                            <div class="product-rating">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count">(56)</span>
                            </div>
                            <a href="product-details.html?id=4" class="btn btn-primary btn-sm w-100 mt-2">View Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="shop.html" class="btn btn-outline-primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <h2 class="mb-3">Subscribe to Our Newsletter</h2>
            <p class="mb-4">Get updates on new arrivals, special offers and more</p>
            <div class="newsletter-form">
                <input type="email" class="newsletter-input mb-3" placeholder="Your email address">
                <button class="newsletter-btn">Subscribe</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Trisher Looks</h5>
                    <p>We offer trendy and affordable fashion for everyone. Quality products at the best prices.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Shop</h5>
                    <ul class="footer-links">
                        <li><a href="#">Women's Fashion</a></li>
                        <li><a href="#">Men's Fashion</a></li>
                        <li><a href="#">Kids' Fashion</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">New Arrivals</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Customer Service</h5>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Information</h5>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Store Locations</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Payment Methods</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="mb-2">&copy; 2025 Trisher Looks. All rights reserved.</p>
                <div class="payment-methods">
                    <div class="payment-icon">Visa</div>
                    <div class="payment-icon">MC</div>
                    <div class="payment-icon">PayPal</div>
                    <div class="payment-icon">MOMO</div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script for cart count (can be expanded)
        document.addEventListener('DOMContentLoaded', function() {
            // Update cart count if needed
            const cartCount = document.querySelector('.cart-count');
            
            // Example: You can update this value from your actual cart system
            // cartCount.textContent = '5';
        });
    </script>
</body>
</html>