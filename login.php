<?php
    require_once './includes/config_session.inc.php';
    require_once './includes/View/signup_view.inc.php';
    require_once './includes/View/login_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./Styles/login.css">
    <title>Sign in & Sign up</title>
</head>

<body>
    <div class="login-signup-container">

        <!-- Navbar Start -->
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-expand-md fixed-top">
                <div class="container-fluid">
                    <div class="logo-container me-auto">
                        <img src="../Images/Growtopia-trans.png" class="logo-img" alt="">
                        <a class="navbar-brand" href="./index.php">Growtopia</a>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Growtopia</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="./about-us.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="./news.php">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="#">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="./ContactUs.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="cart">
                        <i class="fa fa-cart-shopping"></i>
                    </button>
                    <a href="./login.php" class="login-button">Login</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Form Start -->
        <main>
            <div class="container">
                <div class="inner-container">
                    <div class="forms">
                        <form action="./includes/login.inc.php" method="post" class="sign-in" id="sign-in">
                            <div class="logo">
                                <img src="./Images/Growtopia img.png" alt="logo">
                                <h4>Growtopia</h4>
                            </div>
                            <div class="heading">
                                <h2>Welcome Back</h2>
                                <h6>Not registered yet?</h6>
                                <a href="#" class="toggle">Sign Up</a>
                            </div>
                            <div class="signin-form">
                                <?php
                                    signInInput();
                                ?>
                                <button type="submit" value="Sign In" class="signin-btn">Sign in</button>

                                <p class="text">Forgot your password?
                                    <a href="#">Get help</a> signing in.
                                </p>
                            </div>
                        </form>

                        <form action="./includes/signup.inc.php" method="post" class="sign-up" id="sign-up">
                            <div class="logo">
                                <img src="./Images/Growtopia img.png" alt="logo">
                                <h4>Growtopia</h4>
                            </div>
                            <div class="heading">
                                <h2>Get Started</h2>
                                <h6>Already has an account?</h6>
                                <a href="#" class="toggle">Sign In</a>
                            </div>
                            <div class="signin-form">
                                <?php
                                    signupInput();
                                ?>
                                <button type="submit" class="signin-btn signup">Sign Up</button>

                                <p class="text">By clicking the "Sign Up" button, you agree to be
                                    bound by the terms and conditions of our Growtopia <a href="#">Terms of Service</a>
                                    and
                                    <a href="#">Privacy Policy</a>.
                                </p>
                            </div>
                        </form>
                    </div>

                    <div class="carousel">
                        <div class="images">
                            <img src="./Images/slider-img1.jpg" class="image img1 show" alt="slider-img1">
                            <img src="./Images/slider-img2.jpg" class="image img2" alt="slider-img2">
                            <img src="./Images/slider-img3.jpg" class="image img3" alt="slider-img3">
                        </div>
                        <div class="text-slider">
                            <div class="sub-text">
                                <div class="text-group">
                                    <h2>Explore our selection</h2>
                                    <h2>Join our community </h2>
                                    <h2>Receive personalized tips</h2>
                                </div>
                            </div>
                            <div class="bullets">
                                <span class="active" data-value="1"></span>
                                <span data-value="2"></span>
                                <span data-value="3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Form End -->




        <!-- Footer Start -->
        <footer>
            <div class="footer-container">
                <div class="footer-section footer-about">
                    <h4>About Growtopia</h4>
                    <p>Growtopia is dedicated to empowering farmers and gardening enthusiasts by providing quality
                        products,
                        expert advice, and the latest news in sustainable farming practices.</p>
                </div>

                <div class="footer-section footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./about-us.php">About Us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="./news.php">Articles</a></li>
                        <li><a href="./ContactUs.php">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-section footer-customer-service">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="./login.php">Login</a> / <a href="./login.php">Register</a></li>
                    </ul>
                </div>

                <div class="footer-section footer-contact">
                    <h4>Contact Us</h4>
                    <p>Email: <a href="#">support@growtopia.com</a></p>
                    <p>Phone: <a href="$">+1 234 567 890</a></p>
                    <p>Address: <a href="#">204/03, Kadugannawa, Kandy</a></p>
                </div>

                <div class="footer-section footer-social">
                    <h4>Follow Us</h4>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2024 Growtopia. All Rights Reserved. Empowering farmers with knowledge, quality products, and
                    sustainable solutions to help cultivate a better future.</p>
            </div>
        </footer>
    </div>
    <!-- Footer End -->

    <script src="/Scripts/login.js"></script>
    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Fontawesome CDN-->
    <script src="https://kit.fontawesome.com/34720af765.js" crossorigin="anonymous"></script>

</body>

</html>