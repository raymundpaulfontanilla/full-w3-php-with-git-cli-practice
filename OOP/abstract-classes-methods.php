<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Classes and Methods</title>
</head>

<body>
    <?php 
        // Parent class
        abstract class Car {
            public $name;
            
            public function __construct($name) {
                $this->name = $name;
            }

            abstract public function intro() : string;
        }

        // Child classes
        class Audi extends Car {
            public function intro() : string {
                return "Choose German quality!, I am $this->name!"; 
            }
        }

        class Volvo extends Car {
            public function intro() : string {
                return "Proud to be Swedish!, I am $this->name!";
            }
        }

        class Citroen extends Car {
            public function intro() : string {
                return "French extravagance!, I am $this->name!";
            }
        }

        // Create object from the child classes
        $audi = new Audi("Audi");
        echo $audi->intro();
        echo "<br>";

        $volvo = new Volvo("Volvo");
        echo $volvo->intro();
        echo "<br>";

        $citroen = new Citroen("Citroen");
        echo $citroen->intro();
        echo "<br>";

        // Abstract method has an argument
        abstract class ParentClass {
            // Abstract method with an argument
            abstract protected function prefixName($name);
        }

        class ChildClass extends ParentClass {
            public function prefixName($name) {
                if ($name == "John Doe") {
                    $prefix = "Mr.";
                } elseif ($name == "Jane Doe") {
                    $prefix = "Mrs.";
                } else {
                    $prefix = "";
                }
                return "{$prefix} {$name}";
            }
        }

        $class = new ChildClass;
        echo $class->prefixName("John Doe");
        echo "<br>";
        echo $class->prefixName("Jane Doe");
        echo "<br>";

        // Abstract method has an argument, and the child class has two optional arguments that are not defined in the parent's abstract method
        abstract class ParentClass2 {
            // Abstract method with an argument
            abstract protected function prefixName2($name2);
        }
        class ChildClass2 extends ParentClass2 {
            // The child class may define optional arguments that are not in the parent's abstract method
            public function prefixName2($name2, $separator2 = ".", $greet2 = "Dear") {
                if ($name2 == "John Doe") {
                    $prefix2 = "Mr";
                } elseif ($name2 == "Jane Doe") {
                    $prefix2  = "Mrs";
                } else {
                    $prefix2 = "";
                }
                return "{$greet2} {$prefix2}{$separator2} {$name2}";
            }
        }

        $class2 = new ChildClass2();
        echo $class2->prefixName2("John Doe");
        echo "<br>";
        echo $class2->prefixName2("Jane Doe");
    ?>
</body>

</html>