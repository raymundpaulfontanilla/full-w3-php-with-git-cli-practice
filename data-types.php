<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>

<body>
    <?php
        // String
        $str1 = "Double Quotes";
        $str2 = 'Single Quotes';
        echo $str1 . "<br>";
        echo $str2. "<br>";

        // Integer
        $num1 = 5985;
        var_dump($num1);
        echo "<br>";

        // Float
        $num2 = 10.365;
        var_dump($num2);
        echo "<br>";

        // Boolean
        $true = true;
        $false = false;
        var_dump($true);
        echo "<br>";
        var_dump($false);
        echo "<br>";

        // Array
        $cars = array("Volvo", "BWM", "Toyota");
        var_dump($cars);
    ?>
</body>

</html>