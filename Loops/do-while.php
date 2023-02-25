<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>

<body>
    <?php
        // True

        $num1 = 1;

        do {
            echo "The number is: $num1 <br>";
            $num1++;
        } while ($num1 <=5);
        echo "<br>";

        // False Execute 6, even if the condition is false
        $num2 = 6;
        
        do {
            echo "The number is: $num2 <br>";
            $num2++;
        } while ($num2 <=5);
    ?>
</body>

</html>