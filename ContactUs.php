<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--Font Import-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="./Styles/ContactUs.css">

  <title>Contact Us</title>
</head>

<body>

  <!-- Bootstrap Modal Structure -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your form has been successfully submitted!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <div class="logo-container me-auto">
        <img src="../Images/Growtopia-trans.png" class="logo-img" alt="">
        <a class="navbar-brand" href="./index.php">Growtopia</a>
      </div>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
              <a class="nav-link mx-lg-2" href="./about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="./news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" href="./ContactUs.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      <button class="cart">
        <i class="fa fa-cart-shopping"></i>
      </button>
      <a href="./login.php" class="login-button">Login</a>
      <button class="navbar-toggler" style="border: none; font-size: 1.25rem;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- Navbar End -->

  <section class="contact-section">
    <div class="contact-bg">
      <h3>Need Assistance? Contact Our Team</h3>
      <h2>Contact Us</h2>
      <div class="line">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <p class="text">Have a question, comment, or suggestion? Please don't hesitate to contact us. Our friendly and
        knowledgeable team is here to assist you. You can reach out to us by email, phone, or through our contact form.
        We value your feedback and strive to provide excellent customer service.
      </p>
    </div>

    <div class="contact-body">
      <div class="contact-info">
        <div>
          <span><i class="fas fa-mobile-alt"></i></span>
          <span>Phone No:</span>
          <span class="text">+12-345-678-901</span>
        </div>
        <div>
          <span><i class="fas fa-envelope-open"></i></span>
          <span>Email:</span>
          <span class="text">support@growtopia.com</span>
        </div>
        <div>
          <span><i class="fas fa-map-marker-alt"></i></span>
          <span>Address:</span>
          <span class="text">204/03, Kadugannawa, Kandy</span>
        </div>
        <div>
          <span><i class="fas fa-clock"></i></span>
          <span>Opening Hours:</span>
          <span class="text">Monday to Saturday (09.00 A.M - 04.00 P.M)</span>
        </div>
      </div>

      <div class="h-line"></div>

      <form action="#" class="contact-form" id="contact-form">
        <div class="input-wrapper">
          <input type="text" name="FirstName" autocomplete="off" id="firstName" class="contact-input">
          <label for="FirstName">First name</label>
          <i class="icon fa fa-address-card"></i>
          <div class="error" id="firstName-error"></div>
        </div>

        <div class="input-wrapper">
          <input type="text" name="LastName" autocomplete="off" id="lastName" class="contact-input">
          <label for="LastName">Last name</label>
          <i class="icon fa fa-address-card"></i>
          <div class="error" id="lastName-error"></div>
        </div>

        <div class="input-wrapper w-100">
          <input type="text" name="Phone" autocomplete="off" id="phone" class="contact-input">
          <label for="Email">Phone Number</label>
          <i class="icon fa-solid fa-phone"></i>
          <div class="error" id="phone-error"></div>
        </div>

        <div class="input-wrapper w-100">
          <input type="text" name="Email" autocomplete="off" id="email" class="contact-input">
          <label for="Email">Email</label>
          <i class="icon fa fa-envelope"></i>
          <div class="error" id="email-error"></div>
        </div>

        <div class="input-wrapper textarea w-100">
          <textarea name="Massage" id="msg" autocomplete="off" class="contact-input"></textarea>
          <label for="Massage">Massage</label>
          <i class="icon fa fa-inbox"></i>
          <div class="error" id="msg-error"></div>
        </div>

        <div class="contact-buttons w-100">
          <button class="button upload">
            <span>
              <i class="fa fa-paperclip"></i> Add Attachment
            </span>
            <input type="file" name="attachment">
          </button>
          <input type="submit" value="Send Message" class="button">
        </div>
      </form>

      <div>
        <img src="./Images/contact-us-bg.jpg" alt="-contact-background" srcset="">
      </div>
    </div>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.485545818972!2d80.50620312629897!3d7.2554754200638385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36b8bc9b57ae5%3A0xe80fc27a87c937f4!2sKadugannawa!5e0!3m2!1sen!2slk!4v1725749097683!5m2!1sen!2slk"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </section>

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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

  <!-- Fontawesome CDN-->
  <script src="https://kit.fontawesome.com/34720af765.js" crossorigin="anonymous"></script>

  <script src="./Scripts/ContactUs.js"></script>
</body>

</html>