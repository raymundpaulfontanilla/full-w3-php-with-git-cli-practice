<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>
    <?php
        // class Fruit {
        //     public $name;
        //     public $color;
            
        //     public function __construct($name, $color) {
        //         $this -> name = $name;
        //         $this -> color = $color;
        //     }

        //     public function intro() {
        //         echo "The fruit is { $this -> name } and the color is { $this -> color }.";
        //     }
        // }

        // // Strawberry class is inherited from Fruit class
        // class Strawberry extends Fruit {
        //     public function message() {
        //         echo "Am I a fruit or a berry? ";
        //     }
        // }

        // $strawberry = new Strawberry("Strawberry", "red");
        // $strawberry -> message();
        // $strawberry -> intro();

        // class Fruit {
        //     public $name;
        //     public $color;
            
        //     public function __construct($name, $color) {
        //         $this -> name = $name;
        //         $this -> color = $color;
        //     }

        //     protected function intro() {
        //         echo "The fruit is { $this -> name } and the color is { $this -> color }.";
        //     }
        // }

        // // Strawberry class is inherited from Fruit class
        // class Strawberry extends Fruit {
        //     public function message() {
        //         echo "Am I a fruit or a berry? ";
        //     }
        // }

        // // Try to call all three methods from outside the class
        // $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
        // $strawberry -> message(); // OK. message() is public
        // $strawberry -> intro(); // ERROR. intro() is protected

        // class Fruit {
        //     public $name;
        //     public $color;
            
        //     public function __construct($name, $color) {
        //         $this -> name = $name;
        //         $this -> color = $color;
        //     }

        //     protected function intro() {
        //         echo "The fruit is {$this->name} and the color is {$this->color}.";
        //     }
        // }

        // // Strawberry class is inherited from Fruit class
        // class Strawberry extends Fruit {
        //     public function message() {
        //         echo "Am I a fruit or a berry? ";
        //          $this -> intro(); // Call protected method from within derived class - OK
        //     }
        // }

        // // Try to call all three methods from outside the class
        // $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
        // $strawberry -> message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

        // class Fruit {
        //     public $name;
        //     public $color;
        //     public function __construct($name, $color) {
        //       $this->name = $name;
        //       $this->color = $color;
        //     }
        //     public function intro() {
        //       echo "The fruit is {$this->name} and the color is {$this->color}.";
        //     }
        //   }
          
        //   class Strawberry extends Fruit {
        //     public $weight;
        //     public function __construct($name, $color, $weight) {
        //       $this->name = $name;
        //       $this->color = $color;
        //       $this->weight = $weight;
        //     }
        //     public function intro() {
        //       echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
        //     }
        //   }
          
        //   $strawberry = new Strawberry("Strawberry", "red", 50);
        //   $strawberry->intro();

          echo "<br>";

          // final

          final class Fruit {
            final public function intro() {
                // some code
            }
          }

          class Strawberry extends Fruit {
            // will result in error
            public function intro() {

            }
          }
    ?>
</body>

</html>