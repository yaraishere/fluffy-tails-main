<?php
  require '../php/fuction.php';
  $items = query("SELECT * FROM items ORDER BY item_name");

  if(isset($_POST["confirm-order"])){
    echo ("
    <script>
      alert('Order sent');
      window.location.href = '../php/';
    </script>
    ");
  }
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
  <link rel="stylesheet" href="../css/home-page.css">
  <link rel="stylesheet" href="../css/store-page.css">
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
        <p class="care-title">Our Store</p>
      </div>
      <div class="detail-section1">
        <p class="detail-text">Fluffy Tails Store, dedicated to making every pet's life more joyful and fulfilling! Our store is stocked with a wide array of premium pet products, including nutritious food, cozy beds, engaging toys, and essential grooming supplies. Whether you have a playful puppy, a curious kitten, or a lovable small critter, we have everything you need to keep your furry friends happy and healthy. At Fluffy Tails, we believe pets are family, and we're committed to providing the best products and service to support your pet's well-being.</p>
      </div>
    </div>
    <div class="section-img">
      <img class="home-img" src="../asset/adopt-img.jpg">
    </div>
  </div>

  <div class="line">
    <p></p>
  </div>

  <div class="our-products-text">
    <div>
      <p>Our Products</p>
    </div>
  </div> 

<form action="" method="post">
  
  <div class="product-section2">
    <div class="product-list">
      <?php
        foreach($items as $item){
          $id = explode(".", $item["item_img"]);
          echo ('<div class="product-detail">');
            echo ('<div>');
              echo ('<img class="pet-img" src="../asset/products/' . $item["item_img"] . '">');
            echo ('</div>');
          echo ('<div>
          <p class="product-name">' . $item["item_name"] . '</p>
          </div>');
          
          if($item["item_quantity"] == 0){
            echo ('<div class="qty-button">
                <p class="out-of-stocks">Out of Stocks</p>
              </div>');
          }else{
            echo ('<div class="qty-button">');
              echo ('<button class="calcu-button" type="button" id="minus-'.$id[0].'" name="minus" disabled>-</button>');
              echo ('<input class="quantity-number" id="quantity-calc-'.$id[0].'" value="0" step="1" disabled>');
              echo ('<button class="calcu-button" type="button" id="plus-'.$id[0].'" name="plus">+</button>');
              echo ('
                <script>
                  document.getElementById("plus-'.$id[0].'").addEventListener("click", function(){
                    document.getElementById("quantity-calc-'.$id[0].'").value++;
                    if(document.getElementById("quantity-calc-'.$id[0].'").value > 0){
                      document.getElementById("minus-'.$id[0].'").disabled = false;
                    }
                    if(document.getElementById("quantity-calc-'.$id[0].'").value >= '. $item["item_quantity"] .'){
                      document.getElementById("plus-'.$id[0].'").disabled = true;
                    }
                  })
                  document.getElementById("minus-'.$id[0].'").addEventListener("click", function(){
                    document.getElementById("quantity-calc-'.$id[0].'").value--;
                    if(document.getElementById("quantity-calc-'.$id[0].'").value <= 0){
                      document.getElementById("minus-'.$id[0].'").disabled = true;
                    }
                    if(document.getElementById("quantity-calc-'.$id[0].'").value < '. $item["item_quantity"] .'){
                      document.getElementById("plus-'.$id[0].'").disabled = false;
                    }
                  })
                </script>
              ');
            echo ('</div>');
          }
          
          echo ('</div>');
        }
        
      ?>
    </div>  
  </div>

  <div class= "button-confirm-order">
    <button class="confirm-order-button" type="submit" name="confirm-order" id="confirm-order">Confirm Order</button> 
  </div>

</form>

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