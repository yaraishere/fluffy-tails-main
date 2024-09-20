<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fluffy_tails";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function petSearch($keyword){
        $query = "SELECT p.pet_id AS id, p.pet_name AS name, b.breed_name AS breed, p.pet_age AS age, p.pet_image AS image FROM pet p
        JOIN pet_category pc ON p.pet_category_id = pc.pet_category_id
        JOIN breed b ON pc.breed_id = b.breed_id
        WHERE 
        p.pet_name LIKE '%$keyword%' OR 
        b.breed_name LIKE '%$keyword%' OR
        p.pet_age LIKE '%$keyword%'OR
        pc.pet_category LIKE '%$keyword%'
        ORDER BY p.pet_name";
        return query($query);
    }
    
    function register($data){
        global $conn;

        $fName = htmlspecialchars($data["fname"]);
        $lName = htmlspecialchars($data["lname"]);
        $name = $fName. " " . $lName;

        $placeOfBirth = htmlspecialchars($data["placeOfBirth"]);
        $dob = htmlspecialchars($data["dob"]);
        $gender = htmlspecialchars($data["gender"]);
        $phoneNumber = htmlspecialchars($data["phoneNumber"]);
        $email = htmlspecialchars($data["email"]);
        
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $confirmPassword = mysqli_real_escape_string($conn, $data["passwordConf"]);
        
        if($fName == null && $lName == null){
            echo "
            <script>
                alert('Please enter your name');
            </script>
            ";
            return false;
        }

        if($placeOfBirth == null){
            echo "
            <script>
                alert('Please enter your place of birth');
            </script>
            ";
            return false;
        }

        if($dob == null){
            echo "
            <script>
                alert('Please enter your date of birth');
            </script>
            ";
            return false;
        }

        if($gender == null){
            echo "
            <script>
                alert('Select your gender');
            </script>
            ";
            return false;
        }

        if(preg_match_all("/\D/", $phoneNumber)>0){
            echo "
            <script>
                alert('Phone number must be number');
            </script>
            ";
            return false;
        }

        if(strlen($phoneNumber)<11 && strlen($phoneNumber)>14){
            echo "
            <script>
                alert('Must be 11 number or more');
            </script>
            ";
            return false;
        }

        if($email == null){
            echo "
            <script>
                alert('Please input your email')
            ";
            return false;
        }

        if($password !== $confirmPassword){
            echo "
            <script>
                alert('Password not match');
            </script>
            ";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $userId = sprintf("UID%03d", count(query("SELECT * FROM user")) + 1);

        mysqli_query($conn, "INSERT INTO user VALUES('$userId', '$name', '$gender', '$placeOfBirth', '$dob', '$phoneNumber', '$email', '$password')");
        
        return mysqli_affected_rows($conn);
    }

    function adoption($data, $petId){
        global $conn;
        $fName = htmlspecialchars($data["fname"]);
        $lName = htmlspecialchars($data["lname"]);
        $dob = htmlspecialchars($data["dob"]);
        $occupation = htmlspecialchars($data["occupation"]);
        $earnings = htmlspecialchars($data["earnings"]);
        $address = htmlspecialchars($data["address"]);
        $phoneNumber = htmlspecialchars($data["phoneNumber"]);
        $email = htmlspecialchars($data["email"]);
        $appoinment = htmlspecialchars($data["appoinment"]);       

        if($fName == null && $lName == null){
            echo "
            <script>
                alert('Please enter your name');
            </script>
            ";
            return false;
        }

        $name = $fName . " " . $lName;

        if($dob == null){
            echo "
            <script>
                alert('Please enter your date of birth');
            </script>
            ";
            return false;
        }
        if($earnings == null){
            echo "
            <script>
                alert('Please enter your earnings');
            </script>
            ";
            return false;
        }

        if(preg_match_all("/\D/", $earnings)>0){
            echo "
            <script>
                alert('Earnings must be a number');
            </script>
            ";
            return false;
        }
        intval($earnings);
        if($earnings < 6000000){
            echo "
            <script>
                alert('Earnings not enough');
            </script>
            ";
            return false;
        }

        if($address == null){
            echo "
            <script>
                alert('Please enter your address');
            </script>
            ";
            return false;
        }

        if($occupation == null){
            echo "
            <script>
                alert('Please enter your occupation');
            </script>
            ";
            return false;
        }

        if($phoneNumber == null){
            echo "
            <script>
                alert('Please enter your phone number');
            </script>
            ";
            return false;
        }

        if(preg_match_all("/\D/", $phoneNumber)>0){
            echo "
            <script>
                alert('Phone number must be number');
            </script>
            ";
            return false;
        }

        if(strlen($phoneNumber)<11 && strlen($phoneNumber)>14){
            echo "
            <script>
                alert('Must be 11 number or more');
            </script>
            ";
            return false;
        }

        if($email == null){
            echo "
            <script>
                alert('Please input your email')
            ";
            return false;
        }

        if($appoinment == null){
            echo "
            <script>
                alert('Please enter your appoinment');
            </script>
            ";
            return false;
        }

        $db = query("SELECT * FROM adoptions_tr WHERE atr_pet_id = '$petId' AND atr_appoinment = '$appoinment'");

        if(count($db)>0){
            echo "
            <script>
                alert('This pet has a appoinment with annother person');
                document.location.href = '../php/adopt-page.php';
            </script>
            ";
            return false;
        }

        $id = sprintf("ATR%03d", count(query("SELECT * FROM adoptions_tr"))+1);
        
        mysqli_query($conn, "INSERT INTO adoptions_tr VALUES('$id', '$name', '$dob', '$occupation', $earnings, '$address', '$phoneNumber', '$email', '$appoinment', '$petId')");
        
        return mysqli_affected_rows($conn);
    }

    function care($data, $careId){
        global $conn;
        $fName = htmlspecialchars($data["fname"]);
        $lName = htmlspecialchars($data["lname"]);
        $petName = htmlspecialchars($data["petName"]);
        $petAge = htmlspecialchars($data["petAge"]);
        $petType = htmlspecialchars($data["petType"]);
        $breed = htmlspecialchars($data["petBreed"]);
        $phoneNumber = htmlspecialchars($data["phoneNumber"]);
        $email = htmlspecialchars($data["email"]);
        $appoinment = htmlspecialchars($data["appoinment"]);   
        $time = htmlspecialchars($data["time"]);  

        if($fName == null && $lName == null){
            echo "
            <script>
                alert('Please enter your name');
            </script>
            ";
            return false;
        }

        $name = $fName . " " . $lName;

        if($petName == null){
            echo "
            <script>
                alert('Please enter your pet name');
            </script>
            ";
            return false;
        }

        if($petAge == null){
            echo "
            <script>
                alert('Please enter your pet age');
            </script>
            ";
            return false;
        }

        if($petType == null){
            echo "
            <script>
                alert('Please enter your pet type');
            </script>
            ";
            return false;
        }

        if($breed == null){
            echo "
            <script>
                alert('Please enter your breed');
            </script>
            ";
            return false;
        }

        if($phoneNumber == null){
            echo "
            <script>
                alert('Please enter your phone number');
            </script>
            ";
            return false;
        }

        if(preg_match_all("/\D/", $phoneNumber)>0){
            echo "
            <script>
                alert('Phone number must be number');
            </script>
            ";
            return false;
        }

        if(strlen($phoneNumber)<11 && strlen($phoneNumber)>14){
            echo "
            <script>
                alert('Must be 11 number or more');
            </script>
            ";
            return false;
        }

        if($email == null){
            echo "
            <script>
                alert('Please input your email')
            ";
            return false;
        }
        $curr = explode('@', $email);
        $gmail = end($curr);
        if($gmail !== "gmail.com"){
            echo "
            <script>
                alert('Email must be @gmail.com')
            ";
            return false;
        }

        if($appoinment == null){
            echo "
            <script>
                alert('Please enter your appoinment');
            </script>
            ";
            return false;
        }

        if($time == null){
            echo "
            <script>
                alert('Please enter your appoinment time');
            </script>
            ";
            return false;
        }

        $times = explode("-", $time);
        $time = $times[0] . ":" . $times[1] . ":00";

        $db = query("SELECT * FROM cares_tr WHERE ct_care_id = '$careId' AND ct_appoinment = '$appoinment' AND ct_time = '$time'");

        if(count($db)>0){
            echo "
            <script>
                alert('This service is full');
                document.location.href = '../php/care-page.php';
            </script>
            ";
            return false;
        }

        $id = sprintf("CT%04d", count(query("SELECT * FROM cares_tr"))+1);
        
        mysqli_query($conn, "INSERT INTO cares_tr VALUES('$id', '$name', $petAge, '$petType', '$breed', '$phoneNumber', '$email', '$appoinment', '$time', '$careId')");
        
        return mysqli_affected_rows($conn);
    }
?>