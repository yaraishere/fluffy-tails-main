<?php
  require '../php/fuction.php';
  $cares = query("SELECT * FROM cares ORDER BY care_name");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fluffy Tails</title>
  <link rel="stylesheet" href="../css/css-reset.css">
  <link rel="stylesheet" href="../css/general.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/care-page.css">
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
      <button class="login-button" id="login-button">Login</button>
    </div>
  </div>

  <div class="top-img">
    <img class="store-img" src="../asset/petshop.jpg">
  </div>

  <div class="care-first-section">
    <div class="section-text">
      <div>
        <p class="care-title">Pet Care</p>
      </div>
      <div class="detail-section1">
        <p class="detail-text-care">Fluffy Tails Pet Care Center, your go-to resource for keeping your furry friends happy, healthy, and thriving! We offer expert advice, tips, and products designed to meet all your pet care needs, from nutrition and grooming to health and wellness. Our dedicated team is passionate about providing the best for your pets, ensuring they receive the love and care they deserve.</p>
      </div>
    </div>
    <div class="section-img">
      <img class="home-img" src="../asset/adopt-img.jpg">
    </div>
  </div>

  <div class="care-second-section">
    <div class="section-img">
      <img class="home-img" src="../asset/adopt-img.jpg">
    </div>
    <div class="section-text">
      <div>
        <p class="title">Why Trust Us?</p>
      </div>
      <div class="care-section2">
        <p class="detail-text-care">At Fluffy Tails, you can trust us to provide the best for your furry family members because we are passionate pet lovers just like you! Our team is dedicated to sourcing top-quality, vet-approved products and offering expert advice to ensure your pets receive the utmost care. We prioritize your pet's health and happiness by continuously updating our knowledge and staying informed about the latest in pet care. Fluffy Tails is here to support you and your pets every step of the way.</p>
      </div>
    </div>
  </div>

  <div class="our-services-text">
    <div>
      <p>Our Services</p>
    </div>
  </div> 

  <div class="care-list-flex">
    <form action="" method="post">
    <div class="care-list">
    <?php
        foreach($cares as $care){
          echo ('<div class="care-detail">');
            
            echo ('<div>');
              echo ('<img class="care-img" src="../asset/services/' . $care["care_img"] . '">');
            echo ('</div>');
            echo ('<div><p class="care-name">' . $care["care_name"] . '</p></div>');

            echo('<div><p class="care-info">'.$care["care_description"].'</p></div>');

            echo('
            <div class="book-now-button">
              <a href="../php/care-detail-page.php?id='.$care["care_id"].'">Book Now!</a>
            </div>
            ');
          echo ('</div>');
        }
      ?>
    </div>
    </form>
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