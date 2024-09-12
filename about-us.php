<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font import -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="./Styles/about-us.css">

  <title>About Us</title>
</head>

<body>
  <div class="about-container">

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
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="./about-us.php">About Us</a>
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
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Start Main -->
    <section class="about-us">
      <div class="about-main">
        <div class="about-img">
          <img src="./Images/aboutus-hero.png" alt="about">
        </div>
        <div class="about-content">
          <div class="about-text">
            <div class="about-title">
              <h4>About Us</h4>
              <div></div>
            </div>
            <h1>Cultivating a Sustainable Future</h1>
            <p>At our core, we are driven by a passion for sustainable farming and a commitment to empowering growers
              and
              gardeners of all kinds. Our mission is to provide high-quality plants, seeds, and farming equipment, along
              with reliable and insightful resources to help our community cultivate a greener world. We believe in the
              power of nature and innovation working together to create a future where everyone has the tools and
              knowledge
              to grow their own food, nurture their gardens, and support the planet. Join us on this journey to make
              sustainable farming accessible and successful for everyone.</p>
          </div>
          <div class="about-btn">
            <button>Learn More</button>
          </div>
        </div>
      </div>
    </section>
    <!-- End Main -->

    <!-- Team Start -->
    <div class="team-container">
      <h1> Our Team</h1>

      <div class="team-row">
        <!-- member 1 -->
        <div class="member mem1 hidden">
          <img src="./Images/member1.jpg" alt="">
          <h2>John Carter</h2>
          <p>Founder & CEO</p>
          <div class="social">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>

        <!-- memeber 2 -->
        <div class="member mem2 hidden">
          <img src="./Images/member2.jpg" alt="">
          <h2>Emily Williams</h2>
          <p>Chief Marketing Officer</p>
          <div class="social">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>

        <!-- member 3 -->
        <div class="member mem3 hidden">
          <img src="./Images/member3.jpg" alt="">
          <h2>James Anderson</h2>
          <p>Chief Operating Officer</p>
          <div class="social">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
    <!-- Team end -->

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
  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Fontawesome CDN-->
  <script src="https://kit.fontawesome.com/34720af765.js" crossorigin="anonymous"></script>
</body>

<script src="./Scripts/about.js"></script>

</html>