<?php
    require '../php/fuction.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT p.pet_id AS id, p.pet_name AS name, b.breed_name AS breed, p.pet_age AS age, p.pet_image AS image FROM pet p
        JOIN pet_category pc ON p.pet_category_id = pc.pet_category_id
        JOIN breed b ON pc.breed_id = b.breed_id
        WHERE 
        p.pet_name LIKE '%$keyword%' OR 
        b.breed_name LIKE '%$keyword%' OR
        p.pet_age LIKE '%$keyword%'OR
        pc.pet_category LIKE '%$keyword%'
        ORDER BY p.pet_name";

    if($keyword == ""){
      $totalDataShow = 9;
      $totalData = count(query("SELECT * FROM pet"));
      $totalPages = ceil($totalData / $totalDataShow);
      $activePages = isset($_GET["page"]) ? $_GET["page"] : 1;
      $firstData = $totalDataShow*($activePages - 1);
      $query = "SELECT p.pet_id AS id, p.pet_name AS name, b.breed_name AS breed, p.pet_age AS age,p.pet_image AS image FROM pet p
      JOIN pet_category pc ON p.pet_category_id = pc.pet_category_id
      JOIN breed b ON pc.breed_id = b.breed_id
      ORDER BY p.pet_name LIMIT $firstData, $totalDataShow";
    }
    $pets = query($query);
?>


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