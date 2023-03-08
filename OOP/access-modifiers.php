<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifiers</title>
</head>

<body>
    <?php
        class Fruit {
            public $name;
            protected $color;
            private $weight;
        }

        $mango = new Fruit();
        echo $mango -> name = "Mango"; // OK
        echo $mango -> color = "Yellow"; // ERROR
        echo $mango -> weight = 300; // ERROR

        class Fruit2 {
            public $name2;
            public $color2;
            public $weight2;

            function setName($name2) { // a public function (DEFAULT)
                $this -> name2 = $name2;
            }

            protected function setColor($color2) { // a protected function
                $this -> color2 = $color2;
            }

            private function setWeight($weight2) { // a private function
                $this -> weight2 = $weight2;
            }
        }

        $mango2 = new Fruit2();
        echo $mango2 -> setName("Mango"); // OK
        echo $mango2 -> setColor("Yellow"); // ERROR
        echo $mango -> setWeight(300); //ERROR
    ?>
</body>

</html>