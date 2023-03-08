<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>

<body>
    <?php
        class Fruit { // Define a class Fruit
            // Properties
            public $name;
            public $color;

            // Fruit Methods
            function setName($name) {
                $this -> name = $name;
            }
            
            function setColor($color) {
                $this -> color = $color;
            }

            function getName() {
                return $this -> name;
            }
            
            function getColor() {
                return $this -> color;
            }
        }
        // Define Objects of a Fruit class
        $apple = new Fruit();
        $banana = new Fruit();
        $apple -> setName('Apple');
        $banana -> setName('Banana');
        $apple -> setColor('Red');
        $banana -> setColor('Yellow');

        echo "Fruit name: " . $apple -> getName() . ", " . "Fruit color: " .$apple -> getColor() . "<br>";
        echo "Fruit name: " . $banana -> getName() . ", " . "Fruit color: " .$banana -> getColor();
        echo "<br>";
        var_dump($apple instanceof Fruit); // Check if an object belongs to a specific class
    ?>
</body>

</html>