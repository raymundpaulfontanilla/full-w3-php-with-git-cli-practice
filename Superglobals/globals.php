<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GLOBALS</title>
</head>

<body>
    <?php
        $num1 = 75;
        $num2 = 25;

        function addition() {
            $GLOBALS['sum'] = $GLOBALS['num1'] + $GLOBALS['num2'];
        }
        
        addition();
        echo $sum;
        echo "<br>";
    ?>
</body>

</html>