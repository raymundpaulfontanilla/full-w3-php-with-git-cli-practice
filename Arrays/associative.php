<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <?php
        // 1st Type of Associative Arrays 
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        echo "Peter is " . $age["Peter"] . " years old.";

        // 2nd Type of Associative Arrays
        $age2['Peter'] = "35";
        $age2['Ben'] = "37";
        $age2['Joe'] = "43";
        echo "<br>";

        // Associative Arrays Loop
        $ages = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

        foreach ($ages as $age => $age_value) {
            echo " Key = " . $age . " , Value = " . $age_value;
        }
        echo "<br>";
        
        // Associative Arrays with Validation doesn't include in the w3schools examples
        $employees = array("firstname"=>"Raymund", "lastname" =>"Fontanilla", "age" => 27, "isMarried" => false, "price" => 103.3, "temperature" => 37.6);
        foreach($employees as  $key => $employee) {
            if (is_bool($employee)) {
                $empValue = ($employee) ? "true" : "false";
                echo $key . ": " . $empValue  . "<br>";
            } else if (is_float($employee)) {
                if ($key == "price") {
                    $discountRate = 0.5;
                    $price = $employee;
                    $discount = $price * $discountRate;
                    echo $key . ": " . $employee . "<br>";
                    echo "Discount: " . $discount . "<br>";
                }
            } else {
                echo $key . ":" . $employee . "<br>";
            }
        }
    ?>
</body>

</html>