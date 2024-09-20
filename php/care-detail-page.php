<?php
  require '../php/fuction.php';
  $id = $_GET["id"];

  $care = query("SELECT * FROM cares WHERE care_id = '$id'")[0];

  if(isset($_POST["submit"])){
    if(isset($_POST["agreement"])){
      if(care($_POST, $id)){
        echo('
        <script>
          alert("Care has been sent");
          document.location.href = "../php";
        </script>
      ');
      }else{
        echo('
        <script>
          alert("Can\'t make and care service form");
        </script>
      ');
      }
    }else{
      echo('
        <script>
          alert("Please fill the agreement box");
          document.location.href = "#care-form";
        </script>
      ');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fluffy Tails</title>
</head>
<link rel="stylesheet" href="../css/css-reset.css">
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/general.css">
<link rel="stylesheet" href="../css/home-page.css">
<link rel="stylesheet" href="../css/care-detail-page.css">
<link rel="stylesheet" href="../css/adoption-form-page.css">
<link rel="stylesheet" href="../css/footer.css">
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

  <div class="care-detail-first-section">
    <div class="pet-care-info">
      <p class="care-detail-title"><?php echo($care["care_name"]); ?></p>
      <p class="care-detail-info"><?php echo($care["care_description"]); ?></p>
    </div>
    <div>
      <img class="petcare-img" src="../asset/services/<?php echo($care["care_img"]); ?>">
    </div>
  </div>

  <div class="line">
    <p></p>
  </div>

  <div>
    <p class="readme-title">Read Me!</p>
    <ul class="readme-detail">
      <li class="readme-list">
        By accessing and filling out the pet care appointment form, you agree to abide by these terms and conditions. If you do not agree with any part of these terms, please do not proceed with the appointment form.
      </li>
      <li>
        You agree to provide accurate, current, and complete information about yourself and your pet(s) as prompted by the appointment form. Providing false or misleading information may result in the cancellation of your appointment and potential refusal of future services.
      </li>
      <li>
        All personal and pet-related information provided in the appointment form will be kept confidential and used solely for the purposes of scheduling and providing pet care services. We adhere to strict data protection and privacy policies to safeguard your information.
      </li>
      <li>
        Submitting an appointment form does not guarantee an appointment. Appointments are subject to availability and will be confirmed via email or phone. Please ensure you provide valid contact details.
      </li>
      <li class="readme-list">
        To cancel an appointment, please provide a minimum of 24 hours' notice. This allows us to accommodate other clients and adjust our schedule accordingly. Cancellations made less than 24 hours before the scheduled appointment time will incur a cancellation fee of 50% of the service cost. If you fail to show up for your appointment without prior notice, a no-show fee equal to the full cost of the scheduled service will be charged.

      </li>
    </ul>
  </div>

  <div id="care-form">
    <div class="pet-care-form-text"><p >Pet Care Form</p></div>
    <div class="form-petcare">
    <form action="" method="post">
      <div class="form-name">
        <div class="insert-name">
          <div class="first-name">
            <p>First Name</p>
            <input class="namefield" type="text" placeholder="Enter Full Name" name="fname">
          </div>
          <div class="last-name">
            <p>Last Name</p>
            <input class="namefield" type="text" placeholder="Enter Last Name" name="lname">
          </div>
      </div> 
      </div>
      <div class="form-data">
        <div class="input-form">
          <p>Pet Name</p>
          <input class="textfield" type="text" placeholder="Enter Pet Name" name="petName">
        </div>
        <div class="input-form">
          <p>Pet Age</p>
          <input class="textfield" type="text" placeholder="Enter Pet Age in months" name="petAge">
        </div>
        <div class="input-form">
          <p>Type of Pet</p>
          <input class="textfield" type="text" placeholder="Ex: Dog, Cat, etc." name="petType">
        </div>
        <div class="input-form">
          <p>Breed</p>
          <input class="textfield" type="text" placeholder="Ex: British Shorthair, Pomerian, etc." name="petBreed">
        </div>
        <div class="input-form">
          <p>Phone Number</p>
          <input class="textfield" type="text" placeholder="Enter Phone Number" name="phoneNumber">
        </div>
        <div class="input-form">
          <p>Email</p>
          <input class="textfield" type="text" placeholder="Must end with @gmail.com" name="email">
        </div>
      </div>
        <div class="appointment-data">
          <div class="appoinment-date">
            <p>Appointment Date</p>
            <input class="namefield" type="date" placeholder="dd-mm-yyyy" name="appoinment">
          </div>
          <div class="appointment-time">
            <p>Appointment Time</p>
            <input class="namefield" type="text" placeholder="hh-mm" name="time">
          </div>
      </div>
      
      <div class="checkbox-care">
        <input id="checkbox" type="checkbox" name="agreement">
        <label class="checkbox-label" for="checkbox">I agree with the Terms and Conditions</label>
      </div>
      <div class="submit-button-care">
        <button id="submit-button-care" name="submit">Submit</button>
      </div>
    </form>
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