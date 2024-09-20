<?php
  require '../php/fuction.php';
  $id = $_GET["id"];
  $query = "SELECT p.pet_name AS name, b.breed_name AS breed, pc.pet_category AS category, p.pet_age AS age, p.pet_image AS image FROM pet p
  JOIN pet_category pc ON p.pet_category_id = pc.pet_category_id
  JOIN breed b ON pc.breed_id = b.breed_id
  WHERE p.pet_id = '$id'";
  $pet = query($query)[0];

  if(isset($_POST["submit"])){
    if(isset($_POST["agreement"])){
      if(adoption($_POST, $id)){
        echo('
        <script>
          alert("Adoption will be review soon");
          document.location.href = "../php";
        </script>
      ');
      }else{
        echo('
        <script>
          alert("Can\'t make and adoption form");
        </script>
      ');
      }
    }else{
      echo('
        <script>
          alert("Please fill the agreement box");
          document.location.href = "#form-adoption";
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
  <link rel="stylesheet" href="../css/css-reset.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/general.css">
  <link rel="stylesheet" href="../css/adoption-form-page.css">
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
      <button class="login-button"id="login-button">Login</button>
    </div>
  </div>

  <div class="adoption-top">
    <div class="adoption-first-section">
      <div class="adopt-info">
        <p class="title-text">Nice to meowt you, My name is <?php echo($pet["name"]);?>!</p>
        <p class="detail-text">Meet <?php echo($pet["name"]);?>, the delightful <?php echo($pet["breed"]);?> <?php echo(strtolower($pet["category"]));?> who is sure to win your heart with his charming personality and endearing traits. <?php echo($pet["name"]);?> is a bundle of plush, velvety fur, known for the breed’s signature round face and large, soulful eyes that give him an almost teddy bear-like appearance.</p>
          
        <p class="detail-text"><?php echo($pet["name"]);?> is the epitome of a laid-back feline. He exudes a calm and composed demeanor, making him the perfect companion for a relaxing day at home. He loves to lounge around in his favorite sunny spot, occasionally stretching out with a contented purr. Despite his relaxed nature, <?php echo($pet["name"]);?> has a playful side that emerges with his favorite toys, especially those that challenge his keen hunting instincts.</p>
        <div class="adopt-me-button">
          <a href="#readme">Adopt Me!</a>
        </div>
        
      </div>
    </div>
    <div class="adopt-pet-img">
      <img class="adopt-img" src="../pet-image-data/<?php echo($pet["image"]); ?>.jpg">
    </div>
  </div>

  <div class="line">
    <p></p>
  </div>

  <div id="readme">
    <p class="readme-title">Read Me!</p>
    <ul class="readme-detail">
      <li class="readme-list">
        By accessing and filling out the pet adoption form, you agree to comply with these terms and conditions. If you do not agree with any part of these terms, please do not proceed with the adoption form.
      </li>
      <li>
        You agree to provide accurate, current, and complete information about yourself and your household as prompted by the adoption form. Providing false or misleading information may result in the denial of your adoption application and potential refusal of future applications.
      </li>
      <li>
        All personal information provided in the adoption form will be kept confidential and used solely for the purposes of processing your adoption application. We adhere to strict data protection and privacy policies to safeguard your information.
      </li>
      <li>
        Submitting an adoption form does not guarantee the adoption of a pet. Each application is subject to review and approval based on our adoption criteria. We reserve the right to deny any application at our discretion.
      </li>
      <li>
        As part of the adoption process, you may be required to participate in a home visit and/or interview. These steps are necessary to ensure the well-being of the pet and to confirm that your home environment is suitable for the pet's needs. An adoption fee is required to cover the costs associated with the care of the pet prior to adoption. This fee is non-refundable and must be paid in full at the time of adoption. The fee amount will be communicated to you during the adoption process.
      </li>
      <li>
        All pets available for adoption have received necessary vaccinations, medical treatments, and a health check. You will receive a copy of the pet's medical records. You agree to continue providing necessary medical care and vaccinations for the pet after adoption.
      </li>
      <li>
        If you are unable to keep the pet for any reason, you agree to return the pet to our organization. You are not permitted to sell, give away, or re-home the pet without our prior consent.
      </li>
      <li>
        By adopting a pet, you agree to provide a safe, loving, and permanent home. You acknowledge that pet ownership is a long-term commitment and involves ongoing responsibilities, including providing food, water, shelter, medical care, and companionship.
      </li>
      <li>
        We may conduct follow-up visits or contact you to ensure the pet is adjusting well to its new home. Your cooperation in these follow-up procedures is appreciated and helps us ensure the welfare of our pets.
      </li>
    </ul>
  </div>

  <div id="form-adoption">
    <div><p class="title-text">Adoption Form</p></div>
    
    <div class="form-adoption">
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
          <p>Date of Birth</p>
          <input class="textfield" type="date" placeholder="Enter Date of Birth" name="dob">
        </div>
        <div class="input-form">
          <p>Occupation</p>
          <input class="textfield" type="text" placeholder="Enter Occupation" name="occupation">
        </div>
        <div class="input-form">
          <p>Earnings/month</p>
          <input class="textfield" type="text" placeholder="Enter Earnings" name="earnings">
        </div>
        <div class="input-form">
          <p>Address</p>
          <input class="textfield" type="text" placeholder="Enter Current Address" name="address">
        </div>
        <div class="input-form">
          <p>Phone Number</p>
          <input class="textfield" type="text" placeholder="Enter Phone Number" name="phoneNumber">
        </div>
        <div class="input-form">
          <p>Email</p>
          <input class="textfield" type="email" placeholder="Enter Email" name="email">
        </div>
        <div class="input-form">
          <p>Appoinment Date</p>
        <input class="textfield" type="date" placeholder="Enter Appointment Date" name="appoinment">
        </div>
        <div>
          <input class="checkbox" type="checkbox" name="agreement">
          I agree with the Terms and Conditions
        </div>
        <div>
          <button type="submit" class="submit-button" name="submit">Submit</button>
        </div>
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