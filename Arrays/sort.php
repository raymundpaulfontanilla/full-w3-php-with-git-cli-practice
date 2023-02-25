<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays</title>
</head>

<body>
    <?php
        // Vehicles Ascending
        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);

        $carCount = count($cars);
        for($car = 0 ; $car < $carCount ; $car++) {
            echo $cars[$car]. "<br>";
        }
        echo "<br>";

        // Numbers Ascending
        $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);

        $numberCount = count($numbers);
        for($number = 0 ; $number < $numberCount; $number++) {
            echo $numbers[$number] . "<br>";
        }
        echo "<br>";

        // Vehicles Descending
        $cars2 = array("Volvo", "BMW", "Toyota");
        rsort($cars2);

        $carCount2 = count($cars2);
        for($car2 = 0 ; $car2 < $carCount2 ; $car2++) {
            echo $cars2[$car2] . "<br>";
        }
        echo "<br>";

        // Ascending According to Key
        $ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
        ksort($ages);

        foreach($ages as $age => $age_value) {
            echo "Key=" . $age . ", Value=" . $age_value;
            echo "<br>";
        }
        echo "<br>";

        // Descending According to Key
        $ages2 = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
        foreach($ages2 as $age2 => $age2_value) {
            echo "Key=" . $age2 . "Value=" . $age2_value;
            echo "<br>";
        }
    ?>
</body>

</html>