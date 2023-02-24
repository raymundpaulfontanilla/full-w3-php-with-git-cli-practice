<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <?php
        // PHP Variables
        $txt = "Hello world!";
        $num1 = 5;
        $num2 = 10.5;

        echo $txt;
        echo "<br>";
        echo $num1;
        echo "<br>";
        echo $num2;
        echo "<br>";

        // Output Variables
        $txt2 = "W3schools.com";
        echo "I love $txt2!";
        echo "<br>";

        $txt3 = "W3schools.com";
        echo "I love " . $txt3 . "!";
        echo "<br>";

        $num3 = 5;
        $num4 = 4;
        echo $num3 + $num4;
    ?>
</body>

</html>