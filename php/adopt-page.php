<?php
  require '../php/fuction.php';

  // Pagination
  $totalDataShow = 9;
  $totalData = count(query("SELECT * FROM pet"));
  $totalPages = ceil($totalData / $totalDataShow);
  $activePages = isset($_GET["page"]) ? $_GET["page"] : 1;

  $firstData = $totalDataShow*($activePages - 1);
  $show = "SELECT p.pet_id AS id, p.pet_name AS name, b.breed_name AS breed, p.pet_age AS age,p.pet_image AS image FROM pet p
  JOIN pet_category pc ON p.pet_category_id = pc.pet_category_id
  JOIN breed b ON pc.breed_id = b.breed_id
  ORDER BY p.pet_name LIMIT $firstData, $totalDataShow";
  $pets = query($show);

  $count = 0;

  if(isset($_POST["search"])){
    if(isset($_POST["keyword"]) && $_POST["keyword"] !== ""){
        $pets = petSearch($_POST["keyword"]);
        $totalData = count($pets);
        $totalPages = ceil($totalData / $totalDataShow);
        $activePages = isset($_GET["page"]) ? $_GET["page"] : 1;
        $firstData = $totalDataShow*($activePages -1);
    }else{
        $pets = query($show);
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
  <link rel="stylesheet" href="../css/adopt-page.css">
  <link rel="stylesheet" href="../css/search.css">
  <link rel="stylesheet" href="../css/pagination.css">
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

  <div class="home-second-section">
    <div class="section-text">
      <div>
        <p class="title">Adopt</p>
      </div>
      <div class="detail-section2">
        <p class="detail-text">Fluffy Tails Adoption Center, where wagging tails and purring hearts are ready to find their forever homes! Our mission is to connect loving families with adorable pets in need of a second chance. Browse through our profiles of playful puppies, and cuddly kittens, each waiting to bring joy and companionship into your life.</p>
      </div>
    </div>
    <div class="section-img">
      <img class="home-img" src="../asset/adopt-img.jpg">
    </div>
  </div>

  <div class="meet-title">
    <p class="meet-text">Meet Our Fluffy Friends!</p>
  </div>

  <div class="search" id="search">
    <form class="form" action="adopt-page.php" method="post">
      <input class="search-box" type="text" placeholder="Search" name="keyword" id="keyword">
      <button type="submit" name="search" id="search-button" class="search-button">
        <img class="search-icon" src="../img/search.svg">
      </button>
    </form>
    
  </div>

  <div class="pet-list-flex">
    <div id="pet-list" class="pet-list">
      <?php foreach ($pets as $pet):?>
      <?php 
        $age = "";
        $convert = 0;
        if($pet["age"] < 12){
          $convert = $pet["age"];
          $age = "$convert";
          $age .= " months";
        }else{
          $convert = ceil($pet["age"]  / 12);
          $age = "$convert";
          $age .= " years old";
        }
      ?>
      <div class="pet-detail">
        <div>
          <img class="pet-img" src="../pet-image-data/<?php echo $pet["image"]?>.jpg">
        </div>
        <div><p class="pet-name"><?php echo $pet["name"]?></p></div>
        <div><p class="pet-info"><?php echo $pet["breed"] . ', ' . $age?></p></div>
        <div class="meet-now-button">
            <a href="./adoption-form-page.php?id=<?php echo $pet["id"];?>">Meet Now!</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div id="pagination" class="pagination">
    <?php 
      echo '<div class="page-number">';
      if($totalPages >= 10 ){
        if($activePages > 1){
          echo '<a href="?page=' . ($activePages - 1) . '">&lt;</a>';
        }

        if($activePages > 4){
          echo '<a href="?page=1">1</a>';
          echo '<p>...</p>';
        }
        $pageInterval = 3;
        if($activePages < 5){
          $pagination = 1;
          if($activePages == 3){
            $pageInterval = 4;
          }elseif($activePages == 4){
            $pageInterval = 5;
          }
        }elseif($activePages > ($totalPages-4)){
          $pagination = $activePages - 1;
          if($activePages == ($totalPages-3)){
            $pageInterval = 5;
          }elseif($activePages == ($totalPages-2)){
            $pageInterval = 4;
          }elseif($activePages >= ($totalPages-1)){
            $pagination = $totalPages - 2;
          }
        }else{
          $pagination = $activePages-1;
        }
  
        for($i = $pagination; $i <= $totalPages && $count < $pageInterval; $i++){
          $count++;
          echo '<a id="pagination-' . $i . '"href="?page=' . $i . '">'. $i .'</a>';
        }
  
        if(($activePages+3) < $totalPages){
          echo '<p>...</p>';
          echo '<a href="?page=' . $totalPages .'">'. $totalPages . '</a>';
        }
        $count = 0;

        if($activePages < $totalPages){
          echo '<a href="?page=' . ($activePages + 1). '">&gt</a>';
        }
        
      }else{
        for($i = 1; $i <= $totalPages; $i++){
          echo '<a id="pagination-'. $i . '" href="?page=' . $i . '">'. $i .'</a>';
        }
      }
      echo '</div>';
    ?>
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
  <script>
    document.getElementById("pagination-<?php echo $activePages ?>").style.backgroundColor = "#77208C";
  </script>
  
</body>
<script src="../script/script.js"></script>
<script src="../script/loginBtn.js"></script>
</html>