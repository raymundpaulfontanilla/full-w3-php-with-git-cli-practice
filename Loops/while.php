<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <?php
        $num1 = 1;

        while ($num1 <=5) {
            echo "The number is: $num1 <br>";
            $num1++; // Post-increment
        }
        echo "<br>";
        $num2 = 0;

        while ($num2 <= 100) {
            echo "The number is: $num2 <br>";
            $num2+= 10;
        }
    ?>
</body>

</html>