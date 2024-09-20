<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fluffy Tails</title>
  <link rel="stylesheet" href="../css/css-reset.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/general.css">
  <link rel="stylesheet" href="../css/home-page.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
  <div class="header">
    <div class="left-section">
      <img class="logo" src="../img/logo.svg">
    </div>
    <div class="mid-section">
      <a href="./index.php" class="header-text">Home</a>
      <a href="./adopt-page.php" class="header-text">Adopt</a>
      <a href="./care-page.php" class="header-text">Pet Care</a>
      <a href="./store-page.php" class="header-text">Store</a>
      <a href="./about-us-page.php" class="header-text">About Us</a>
    </div>
    <div class="right-section">
      <button type="button" class="login-button" id="login-button" onclick="window.location.href = '../php/login-page.php'">Login</button>
    </div>
  </div>

  <div class="top-img">
    <img class="store-img" src="../asset/petshop.jpg">
  </div>

  <div class="home-first-section">
    <div class="home-intro-logo">
      <img class="logo" src="../img/logo.svg">
    </div>
    <div class="home-intro">
      <div class="home-welcome-text">
        <p class="title-text">Welcome to Fluffy Tails!</p>
      </div>
      <div class="home-intro-detail">
        <p class="detail-text">Welcome to Fluffy Tails, your ultimate pet paradise! Whether you have a playful pup, a curious kitty, or a delightful critter, our pet store is brimming with everything you need to keep your furry friends happy and healthy. Explore our wide range of high-quality pet food, cozy beds, fun toys, and grooming essentials, all carefully selected to cater to the unique needs of your beloved companions.</p>
      </div>
    </div>
  </div>

  <div class="our-services">
    <div class="services-text">
    <p>Our Services</p>
    </div>
    <div class="services-detail">
      <div class="icon-name" onclick="window.location.href = '../php/adopt-page.php'">
        <img class="service-icon" src="../img/icon-dog.svg">
        <p>Adopt</p></div>
      <div class="icon-name" onclick="window.location.href = '../php/care-page.php'">
        <img class="service-icon" src="../img/paw-icon.svg">
        <p>Pet Care</p></div>
      <div class="icon-name" onclick="window.location.href = '../php/store-page.php'">
        <img class="service-icon" src="../img/shop-icon.svg">
        <p>Necessity</p></div>
    </div>
  </div>

  <div class="home-second-section">
    <div class="section-text">
      <div>
        <p class="title">Adopt</p>
      </div>
      <div class="detail-section2">
        <p class="detail-text">Fluffy Tails Adoption Center, where wagging tails and purring hearts are ready to find their forever homes! Our mission is to connect loving families with adorable pets in need of a second chance. Browse through our profiles of playful puppies, and cuddly kittens, each waiting to bring joy and companionship into your life. Our caring team is here to support you through every step of the adoption process, ensuring a perfect match for both you and your new furry friend.</p>
      </div>
    </div>
    <div class="section-img">
      <img class="home-img" src="../asset/adopt-img.jpg">
    </div>
  </div>

  <div class="home-third-section">
    <div class="section-img">
      <img class="home-img" src="../asset/petcare-img.jpg">
    </div>
    <div class="info-section3">
      <p class="title-petcare">Pet Care</p>
    <div class="detail-section3">
      <p class="detail-text">Fluffy Tails Pet Care Center, your go-to resource for keeping your furry friends happy, healthy, and thriving! We offer expert advice, tips, and products designed to meet all your pet care needs, from nutrition and grooming to health and wellness. Our dedicated team is passionate about providing the best for your pets, ensuring they receive the love and care they deserve. Explore our range of high-quality supplies and discover helpful guides that make pet parenting a joyful and rewarding experience.</p>
    </div>
    </div>
  </div>

  <div class="home-second-section">
    <div class="section-text">
      <div>
        <p class="title">Our Store</p>
      </div>
      <div class="detail-section2">
        <p class="detail-text"> Fluffy Tails Store, dedicated to making every pet's life more joyful and fulfilling! Our store is stocked with a wide array of premium pet products, including nutritious food, cozy beds, engaging toys, and essential grooming supplies. Whether you have a playful puppy, a curious kitten, or a lovable small critter, we have everything you need to keep your furry friends happy and healthy. At Fluffy Tails, we believe pets are family, and we're committed to providing the best products and service to support your pet's well-being.</p>
      </div>
    </div>
    <div class="section-img">
      <img class="home-img" src="../asset/petstore-img.jpg">
    </div>
  </div>

  <div class="footer">
    <div class="footer-top">
      <div class="footer-content">

        <div class="footer-info">
          <p>Our Company</p>
        </div>
        <div class="footer-detail">
          <ul>
            <li><a href="../php/about-us-page.php">About Us</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-first">

        <div class="footer-info">
          <p>Our Services</p>
        </div>
        <div class="footer-detail">
          <ul>
            <li><a href="../php/care-detail-page.php">Pet Care Services</a></li>
          </ul>
        </div>
      </div>
      
      <div class="footer-first">

        <div class="footer-info">
          <p>Meet Our Fluffy Friends</p>
        </div>
        <div class="footer-detail">
          <ul>
            <li><a href="../php/adopt-page.php">Adopt now!</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-first">

        <div class="footer-info">
          <p>Contact Us</p>
        </div>
        <div class="footer-detail">
          <img class="fb-icon" src="../img/fb-icon.svg">
          <img class="x-icon" src="../img/x-icon.svg">
          <img class="ig-icon" src="../img/ig-icon.svg">
        </div>
      </div>
  </div>

  <div class="footer-bottom">
      <p>Terms of Service</p>
      <p>Copyright © 2023 Fluffy Tails</p>
  </div>

</body>
<script src="../script/loginBtn.js"></script>
</html>