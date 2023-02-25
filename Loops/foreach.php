<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
            echo "$value <br>";
        }
        echo "<br>";

        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

        foreach ($age as $value => $val) {
            echo "$value = $val<br>";
        }
    ?>
</body>

</html>