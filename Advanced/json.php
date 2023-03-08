<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>

<body>
    <?php
        // Encode a value to JSON format
        $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
        echo json_encode($age);
        echo "<br>";
        echo "<br>";

        // Encode an indexed array into JSON array
        $cars = array("Volvo", "BMW", "Toyota");
        echo json_encode($cars);
        echo "<br>";
        echo "<br>";

        // Decode a JSON object into a PHP object or an associative array
        $jsonObj = '{"Peter": 35, "Ben": 37, "Joe": 43}';
        var_dump(json_decode($jsonObj));
        echo "<br>";
        echo "<br>";

        // Decodes JSON data into a PHP associative array
        $jsonObj2 = '{"Raymund": 28, "Paul": 27, "Fontanilla": 26}';
        var_dump(json_decode($jsonObj2, true));
        echo "<br>";
        echo "<br>";

        // Accessing the decoded values from an object and from an associative array
        $jsonObj3 = '{"Fontanilla": 25, "Paul": 24, "Raymund": 23}';
        $obj = json_decode($jsonObj3);

        echo "Fontanilla's age is: " . $obj -> Fontanilla . "<br>";
        echo "Paul's age is: " . $obj -> Paul . "<br>";
        echo "Raymund's age is: " . $obj -> Raymund . "<br><br>";

        // Accessing the values from a PHP associative array
        $jsonObj4 = '{"Raymond": 22, "Paul": 21, "Fontanilla": 20}';
        $arr = json_decode($jsonObj4, true);

        echo "Raymond's age is: " . $arr["Raymond"] . "<br>";
        echo "Paul's age is: " . $arr["Paul"] . "<br>";
        echo "Fontanilla's age is: " . $arr["Fontanilla"] . "<br>";
        echo "<br>";
        echo "<br>";

        // Loop through the values of a PHP object
        $jsonObj5 = '{"Reymund": 19, "Paul": 18, "Fontanilla": 17}';
        $obj2 = json_decode($jsonObj5);

        foreach($obj2 as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
        echo "<br>";

        // Loop through the values of a PHP associative array
        $jsonObj6 = '{"Reymond": 16, "Paul": 15, "Fontanilla": 14}';
        $arr2 = json_decode($jsonObj6, true);

        foreach($arr2 as $key2 => $value2) {
            echo $key2 . " => " . $value2 . "<br>";
        }
    ?>
</body>

</html>