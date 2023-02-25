<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and Continue</title>
</head>

<body>
    <?php
        for ($num1 = 0 ; $num1 < 10 ; $num1++) {
            if ($num1 == 4) {
                break;
            }
            echo "The number is: $num1 <br>";
        }
        echo "<br>";
        
        for ($num2 = 0 ; $num2 < 10 ; $num2++) {
            if ($num2 == 4) {
                continue;
            }
            echo "The number is: $num2 <br>";
        }
        echo "<br>";

        $num3 = 0;
        while ($num3 < 10) {
            if ($num3 == 4) {
                break;
            }
            echo "The number is: $num3 <br>"; 
            $num3++;
        }
        echo "<br>";

        $num4 = 0;
        while ($num4 < 10) {
            if ($num4 == 4) {
                $num4++;
                continue;
            }
            echo "The number is: $num4 <br>";
            $num4++;
        }
    ?>
</body>

</html>