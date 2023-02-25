<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else If Statements</title>
</head>

<body>
    <?php
        // If
        $time = date("H");

        if ($time < "20") {
            echo "Have a good day!";
        }
        echo "<br>";
        
        // If Else
        $time2 = date("H");

        if ($time2 < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        echo "<br>";

        // If Else If
        $time3 = date("H");

        if ($time3 < "10") {
            echo "Have a good morning!";
        } elseif ($time3 < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night";
        }
    ?>
</body>

</html>