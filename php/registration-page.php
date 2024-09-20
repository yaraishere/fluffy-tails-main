<?php
require '../php/fuction.php';
  if(isset($_POST["register"])){
    if(isset($_POST["agreement"])){
      if(register($_POST) > 0){
        echo "<script>
                alert('Register succed');
                window.location.href = 'login-page.php';
            </script>";
      } else{
          echo "<script>
                  alert('Register failed');
              </script>";     
      }
    }else{
      echo "<script>
                  alert('Please fill our agreement');
              </script>";   
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
  <link rel="stylesheet" href="../css/general.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/registration-page.css">
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
    </div>
  </div>

  <div class="registration-form">
    <div>
      <p class="title">Account Registration</p>
    </div>
    <div class="regis-data">
      <form action="" method="post">
        <div class="regis-first">
          <div>
            <p>First Name</p>
            <input class="textfield1" type="text" name="fname" id="fname">
          </div>
          <div>
            <p>Last Name</p>
            <input class="textfield1" type="text" name="lname" id="lname">
          </div>
        </div>
        <div class="regis-second">
          <div>
            <p>Place of Birth</p>
            <input class="textfield1" type="text" name="placeOfBirth" id="placeOfBirth">
          </div>
          <div>
            <p>Date of Birth</p>
            <input class="textfield1" type="date" name="dob" id="dob">
          </div>
        </div>
        <div class="regis-third">
          <div>
            <p>Gender</p>
          </div>
          <div class="gender-radio">
            <input type="radio" value="Male" name="gender" id="genderMale">Male
            <input type="radio" value="Female" name="gender" id="genderFemale">Female
          </div>
          <div>
            <p>Phone Number</p>
            <input class="textfield2" type="text" name="phoneNumber" id="phoneNumber">
          </div>
          <div>
            <p>Email</p>
            <input class="textfield2" type="email" name="email" id="email">
          </div>
          <div>
            <p>Password</p>
            <input class="textfield2" type="password" name="password" id="password">
          </div>
          <div>
            <p>Confirm Password</p>
            <input class="textfield2" type="password" name="passwordConf" id="passwordConf">
          </div>
          <div>
            <input class="checkbox" type="checkbox" name="agreement" id="agreement">
            I agree with the Terms and Conditions
          </div>
          <div>
            <button class="register-button" name="register">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
    
    <div class="login-link">
      <p>Already have an account?</p>
      <a href="./login-page.php">Log In Here</a>
    </div>
 
</body>
</html>