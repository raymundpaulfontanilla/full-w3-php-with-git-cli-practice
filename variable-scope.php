<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Scope</title>
</head>

<body>
    <?php
        $x = 5; // global scope

        function myTest() {
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();
        echo "<p>Variable x outside function is: $x</p>";

        function myTest2() {
            $y = 10; //local scope
            echo "<p>Variable y inside function is: $y</p>";
        }
        myTest2();

        echo "<p>Variable y outside function is: $y</p>";

        $num1 = 20;
        $num2 = 40;

        function myTest3() {
            global $num1,$num2;
            $num2 = $num1 + $num2;
        }
        myTest3();
        echo $num2 . "<br>";

        $num3 = 10;
        $num4 = 10;

        function myTest4() {
            $GLOBALS ['num4'] = $GLOBALS ['num3'] + $GLOBALS ['num4'];
        }
        myTest4();
        echo $num4 . "<br>";

        function myTest5() {
            static $num5 = 0;
            echo $num5;
            $num5++;
        }
        myTest5();
        myTest5();
        myTest5();
    ?>
</body>

</html>