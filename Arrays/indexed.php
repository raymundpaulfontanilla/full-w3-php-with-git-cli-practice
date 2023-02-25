<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>

<body>
    <?php
        $carBrand = array("Volvo", "BMW", "Toyoya");
        $carCount = count($carBrand);

        for ($car = 0 ; $car < $carCount ; $car++) {
            echo $carBrand[$car];
            echo "<br>";
        }
    ?>
</body>

</html>