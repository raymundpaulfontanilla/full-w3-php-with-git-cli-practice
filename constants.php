<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>
    <?php
        define("GREETING", "Welcome to W3schools.com!");
        echo GREETING;
        echo "<br>";

        // define("GREETING2", "Welcome to W3schools.com!",true);
        // echo greeting2;
        // echo "<br>";

        define("cars", [
            "Alfa Romeo",
            "BMW",
            "Toyota"
        ]);
        echo cars[0];
        echo "<br>";

        define("GREETING3","Welcome to W3schools.com!");

        function myTest() {
            echo GREETING3;
        }
        myTest();
    ?>
</body>

</html>