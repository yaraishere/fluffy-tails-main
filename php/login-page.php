<?php
  require '../php/fuction.php';

  if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $validation = mysqli_query($conn, "SELECT * FROM user WHERE user_email = '$email'");

    if(mysqli_num_rows($validation) === 1){
      $data = mysqli_fetch_assoc($validation);
      if(password_verify($password, $data["user_password"])){
        
        header("Location: ../php");
        exit;
      }else{
        $error = true;
      }
    }else{
      $error = true;
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
  <link rel="stylesheet" href="../css/login-page.css">
</head>
<body>

  <div class="header">
    <div class="left-section">
      <img class="logo" src="../img/logo.svg">
    </div>
    <div class="mid-section">
      <a href="../php/index.php" class="header-text">Home</a>
      <a href="../php/adopt-page.php" class="header-text">Adopt</a>
      <a href="../php/care-page.php" class="header-text">Pet Care</a>
      <a href="../php/store-page.php" class="header-text">Store</a>
      <a href="../php/about-us-page.php" class="header-text">About Us</a>
    </div>
    <div class="right-section">
    </div>
  </div>

  <div class="login-form">
    <form action="" method="post">
    <div class="form-detail">
      <div>
        <p class="title-text">Email</p>
        <input class="textfield" type="text" name="email" id="email">
      </div>
      <div>
        <p class="title-text">Password</p>
        <input class="textfield" type="password" name="password" id="password">
      </div>
      <div>
        <button class="login-button" name="login" id="login">
          Log In
        </button>
      </div>
    </div>
    </form>
  </div>

  <div class="regis-link">
    <p>Don't have an account?</p>
    <a href="../php/registration-page.php">Register Here</a>
  </div>

</body>
</html>