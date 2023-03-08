<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Functions</title>
</head>

<body>
    <?php
        // Callback Functions
        function myCallback($item) {
            return strlen($item);
        }

        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map("myCallback", $strings);
        print_r($lengths);
        echo "<br>";

        // Anonymous Functions
        $strings2 = ["grapes", "cherry", "strawberry", "lemon"];
        $lengths2 = array_map( function ($item) {
            return strlen($item);
        }, $strings2);
        print_r($lengths2);
        echo "<br>";

        // Callbacks in User Defined Functions
        function exclaim($str) {
            return $str . "! ";
        }

        function ask($str) {
            return $str. "? ";
        }

        function printFormatted($str, $format) {
            // Calling the $format callback functions
            echo $format($str);
        }

        // Pass "exclaim" and "ask" as a callback functions to printFormatted()
        printFormatted("Hello world", "exclaim");
        printFormatted("Hello world", "ask");
    ?>
</body>

</html>