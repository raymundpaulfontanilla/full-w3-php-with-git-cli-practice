<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression</title>
</head>

<body>
    <?php
        // preg_match()
        $string = "Visit W3Schools";
        $pattern = "/w3schools/i";
        echo preg_match($pattern, $string);
        echo "<br>";

        // preg_match_all()
        $string2 = "The rain in SPAIN falls mainly on the plains.";
        $pattern2 = "/ain/i";
        echo preg_match_all($pattern2, $string2);
        echo "<br>";

        // preg_replace()
        $string3 = "Visit Microsoft!";
        $pattern3 = "/microsoft/i";
        echo preg_replace($pattern3, "W3Schools", $string3);
        echo "<br>";

        // Grouping
        $string4 = "Apple and bananas.";
        $pattern4 = "/ba(na){2}/i";
        echo preg_match($pattern4, $string4);
    ?>
</body>

</html>