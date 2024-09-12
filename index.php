<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/home.css">

    <!-- Font import -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>

    <div class="home-container">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <div class="logo-container me-auto">
                    <img src="../Images/Growtopia-trans.png" class="logo-img" alt="">
                    <a class="navbar-brand" href="./index.php">Growtopia</a>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Growtopia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                <button class="navbar-toggler" style="border: none; font-size: 1.25rem;" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="main-carousel">
            <div class="content-list">
                <div class="carousel-items" style="background-image: url('./Images/main-carousle1.jpg');">
                    <div class="content">
                        <div class="cont-title">
                            <div class="img-title">Growtopia</div>
                            <div class="img-name">Community</div>
                        </div>
                        <div class="discription">Join a thriving community of farmers, experts, and enthusiasts. Share
                            experiences, ask questions, and collaborate to solve challenges. Together, we can grow
                            better and support each other in the journey of farming.
                        </div>
                        <div class="see-more-btn">
                            <button>See More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-items" style="background-image: url('./Images/main-carousle2.jpg');">
                    <div class="content">
                        <div class="cont-title">
                            <div class="img-title">Growtopia</div>
                            <div class="img-name">Quality</div>
                        </div>
                        <div class="discription">Choose from a curated selection of high-quality seeds, plants, and
                            farming equipment. Each product is tested and trusted to ensure you get only the best for
                            your farm, fostering healthy growth and abundant harvests.
                        </div>
                        <div class="see-more-btn">
                            <button>See More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-items" style="background-image: url('./Images/main-carousle3.jpg');">
                    <div class="content">
                        <div class="cont-title">
                            <div class="img-title">Growtopia</div>
                            <div class="img-name">Organic</div>
                        </div>
                        <div class="discription">Embrace organic farming methods to cultivate healthier crops without
                            harmful chemicals. Find tips on natural pest control, organic fertilizers, and practices
                            that prioritize soil health and crop quality.
                        </div>
                        <div class="see-more-btn">
                            <button>See More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-items" style="background-image: url('./Images/main-carousle4.jpg');">
                    <div class="content">
                        <div class="cont-title">
                            <div class="img-title">Growtopia</div>
                            <div class="img-name">Convenience</div>
                        </div>
                        <div class="discription">Simplify your farming needs with a user-friendly shopping experience.
                            Browse, select, and buy everything from seeds to equipment in one place. Enjoy a seamless
                            checkout process and quick delivery to your doorstep.
                        </div>
                        <div class="see-more-btn">
                            <button>See More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-items" style="background-image: url('./Images/main-carousle5.jpg');">
                    <div class="content">
                        <div class="cont-title">
                            <div class="img-title">Growtopia</div>
                            <div class="img-name">Equipment</div>
                        </div>
                        <div class="discription">Equip your farm with the latest tools and machinery to make your work
                            easier and more efficient. Explore a range of farming equipment from hand tools to advanced
                            machinery suited for every scale of farming.
                        </div>
                        <div class="see-more-btn">
                            <button>See More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-items" style="background-image: url('./Images/main-carousle6.jpg');">
                    <div class="content">
                        <div class="cont-title">
                            <div class="img-title">Growtopia</div>
                            <div class="img-name">Produce</div>
                        </div>
                        <div class="discription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
                            vitae
                            repellat
                            magnam dolorem assumenda totam facilis iure eveniet aliquam, reiciendis maxime! Sapiente at
                            doloribus
                            dolorem nostrum. Rem dolores eius autem.
                        </div>
                        <div class="see-more-btn">
                            <button>See More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-toggle">
                <button class="back">
                    < </button>
                        <button class="next"> > </button>
            </div>

            <div class="Automatedslider"></div>
        </div>
        <!-- Carousel End -->

        <!-- Service Star -->
        <div class="service-container">
            <h1>Our Services</h1>

            <div class="service-row">
                <!-- Service 1 -->
                <div class="service">
                    <i class="fa-solid fa-building-wheat"></i>
                    <h2>Agricultural Supplies</h2>
                    <p>Discover a wide range of essential farming tools and equipment</p>
                </div>

                <!-- Service 2 -->
                <div class="service">
                    <i class="fa-solid fa-seedling"></i>
                    <h2>Plant Nursery</h2>
                    <p>Find healthy and high-quality plants for your farm</p>
                </div>

                <!-- Service 3 -->
                <div class="service">
                    <i class="fa-solid fa-wheat-awn"></i>
                    <h2>Seed Store</h2>
                    <p>Choose from a variety of seeds for your crops</p>
                </div>

                <!-- Service 4 -->
                <div class="service">
                    <i class="fa-solid fa-microchip"></i>
                    <h2>Agri-Tech Solutions</h2>
                    <p>Explore innovative technologies to improve your farming efficiency</p>
                </div>
            </div>
        </div>
        <!-- Service end -->

        <!-- Why section Start -->
        <div class="why-section">
            <div class="why-img">
                <img src="./Images/why.png" alt="" srcset="">
            </div>
            <div class="why-content">
                <h2>
                    <p>Why you should</p> Choose Us?
                </h2>
                <ul class="why-points">
                    <li class="point point1 hidden">
                        <i class="fa-solid fa-fire"></i>
                        <p>Wide range of products: Offer a diverse selection of farming supplies, including seeds,
                            plants,
                            equipment,
                            and more.</p>
                    </li>
                    <li class="point point2 hidden">
                        <i class="fa-solid fa-fire"></i>
                        <p>High-quality standards: Ensure that all products meet or exceed industry quality standards.
                        </p>
                    </li>
                    <li class="point point3 hidden">
                        <i class="fa-solid fa-fire"></i>
                        <p>Trusted suppliers: Partner with reputable suppliers to guarantee product reliability.</p>
                    </li>
                </ul>
                <a href="#">Read More</a>
            </div>
        </div>
        <!-- Why section end -->

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
        <!-- Footer End -->

    </div>

    <script src="./Scripts/home.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Fontawesome CDN-->
    <script src="https://kit.fontawesome.com/34720af765.js" crossorigin="anonymous"></script>
</body>

</html>