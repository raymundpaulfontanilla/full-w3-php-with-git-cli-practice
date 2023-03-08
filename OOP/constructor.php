<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>

<body>
    <?php 
        class Fruit {
            public $name;
            public $color;

            function __construct($name, $color) { // Alternative for calling the setter method
                $this -> name = $name;
                $this -> color = $color;
            }

            function getName() {
                return $this -> name;
            }

            function getColor() {
                return $this -> color;
            }
        }

        $apple = new Fruit("Apple", "Red");
        echo $apple -> getName();
        echo "<br>";
        echo $apple -> getColor();
    ?>
</body>

</html>