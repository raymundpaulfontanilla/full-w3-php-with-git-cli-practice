<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>

<body>
    <?php
        $num1 = 5985;
        var_dump($num1);
        echo "<br>";

        $num2 = 59.85;
        var_dump(is_int($num2));

        $num3 = 10.365;
        echo "<br>";
        var_dump(is_float($num3));

        $num4 = 1.9e411;
        echo "<br>";
        var_dump($num4);
        echo "<br>";

        $num5 = acos(8);
        var_dump($num5);
        echo "<br>";

        $num6 = 5986;
        var_dump(is_numeric($num6));
        echo "<br>";

        $num6 = "5986";
        var_dump(is_numeric($num6));
        echo "<br>";

        $num6 = "59.85" + 100;
        var_dump(is_numeric($num6));
        echo "<br>";

        $num6 = "Hello";
        var_dump(is_numeric($num6));
        echo "<br>";

        $num7 = 23465.768;
        $int_cast = (int)$num7;
        echo $int_cast;
        echo "<br>";

        $num8 = "23465.768";
        $int_cast = (int)$num8;
        echo $int_cast;
    ?>  
</body>

</html>