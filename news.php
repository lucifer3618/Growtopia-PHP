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

  <link rel="stylesheet" href="./Styles/news.css">

  <title>News</title>
</head>

<body>

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
                <a class="nav-link" aria-current="page" href="./index.php
    ">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="./about-us.php
    ">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" href="./news.php
    ">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="./ContactUs.php
    ">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
        <button class="cart">
          <i class="fa fa-cart-shopping"></i>
        </button>
        <a href="./login.ph" class="login-button">Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->

  <!-- News Section Start -->
  <main>
    <section class="home">
      <div class="home-text home-container">
        <h2 class="home-title">Stay Updated with the Latest in Farming</h2>
        <span class="home-subtext">
          Dive into a world of agriculture news, expert advice, and innovative ideas to help you cultivate
          success.
        </span>
      </div>
    </section>

    <div class="about about-container" id="about-container">
      <div class="content-container">
        <h2 class="title-text">Welcome to Growtopia's News Hub!</h2>
        <p class="title-subtext">At Growtopia, we believe that knowledge is the key to growth—both in the fields and
          beyond. Our news hub is your trusted source for the latest updates, expert insights, and valuable tips on
          everything related to farming and agriculture. Whether you are a seasoned farmer, an aspiring grower, or
          simply
          someone passionate about sustainable living, we're here to keep you informed and inspired.</p>
        <a href="#" class="read-more-btn">Read More</a>
      </div>
      <div class="img-container">
        <img src="./Images/news-section-about.webp" alt="">
      </div>
    </div>

    <div class="news-filer-con">
      <div class="filer-item active-fil" data-filter="all">All</div>
      <div class="filer-item" data-filter="culti">Agriculture</div>
      <div class="filer-item" data-filter="tech">Agrotechnology</div>
      <div class="filer-item" data-filter="sus">Permaculture</div>
    </div>

    <div class="post post-container">

      <!-- Agriculture -->
      <div class="post-con culti">
        <img src="./Images/crop-1.jpg" alt="" class="post-img">
        <h2 class="category">Agriculture</h2>
        <a href="#" class="post-title">New Pest Threatens Wheat Crops in Western Australia</a>
        <span class="post-date">August 28, 2024</span>
        <p class="post-subtext">A new farming technique has led to unprecedented rice production in Thailand</p>
        <span class="author">John Doe</span>
      </div>

      <div class="post-con culti">
        <img src="./Images/crop-2.jpg" alt="" class="post-img">
        <h2 class="category">Agriculture</h2>
        <a href="#" class="post-title">Record-Breaking Rice Yields Reported in Thailand</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">Experts warn of a new insect species that could devastate wheat crops in the region.</p>
        <span class="author">John Doe</span>
      </div>

      <div class="post-con culti">
        <img src="./Images/crop-3.jpg" alt="" class="post-img">
        <h2 class="category">Agriculture</h2>
        <a href="#" class="post-title">Soybean Prices Surge Amidst Global Drought</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">A severe drought in major soybean-producing regions has caused a sharp increase in
          prices.
        </p>
        <span class="author">John Doe</span>
      </div>

      <!-- Farming Technology -->
      <div class="post-con tech">
        <img src="./Images/tech-1.webp" alt="" class="post-img">
        <h2 class="category">Agrotechnology</h2>
        <a href="#" class="post-title">New Drone Technology Improves Crop Monitoring</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">Advanced drones are being used to detect crop health issues and optimize fertilizer
          applications.</p>
        <span class="author">John Doe</span>
      </div>

      <div class="post-con tech">
        <img src="./Images/tech-2.png" alt="" class="post-img">
        <h2 class="category">Agrotechnology</h2>
        <a href="#" class="post-title">AI-Powered System Predicts Harvest Yields</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">A new AI algorithm can accurately predict crop yields based on various environmental
          factors.</p>
        <span class="author">John Doe</span>
      </div>

      <div class="post-con tech">
        <img src="./Images/tech-3.webp" alt="" class="post-img">
        <h2 class="category">Agrotechnology</h2>
        <a href="#" class="post-title">Autonomous Tractors Gain Traction in Agriculture</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">Self-driving tractors are becoming more common, reducing labor costs and improving
          efficiency.</p>
        <span class="author">John Doe</span>
      </div>

      <!-- Sustainable Farming -->
      <div class="post-con sus">
        <img src="./Images/sus-1.jpg" alt="" class="post-img">
        <h2 class="category">Permaculture</h2>
        <a href="#" class="post-title">New Farming Techniques Reduce Water Usage</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">Innovative farming practices are helping to conserve water resources in drought-prone
          regions.</p>
        <span class="author">John Doe</span>
      </div>

      <div class="post-con sus">
        <img src="./Images/sus-2.jpg" alt="" class="post-img">
        <h2 class="category">Permaculture</h2>
        <a href="#" class="post-title">Solar Power Adoption Grows in Agriculture</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">Farmers are increasingly turning to solar energy to reduce their reliance on fossil
          fuels.
        </p>
        <span class="author">John Doe</span>
      </div>

      <div class="post-con sus">
        <img src="./Images/sus-3.jpg" alt="" class="post-img">
        <h2 class="category">Permaculture</h2>
        <a href="#" class="post-title">Permaculture Gains Popularity Among Small Farmers</a>
        <span class="post-date">14 Oct 2024</span>
        <p class="post-subtext">Permaculture practices are gaining traction as a sustainable and resilient approach to
          farming.</p>
        <span class="author">John Doe</span>
      </div>

    </div>
  </main>
  <!-- News Section End -->

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

  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- JQuery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Fontawesome CDN-->
  <script src="https://kit.fontawesome.com/34720af765.js" crossorigin="anonymous"></script>

  <script src="./Scripts/news.js"></script>
</body>

</html>