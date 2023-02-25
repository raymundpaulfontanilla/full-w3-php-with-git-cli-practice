<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
        // User Defined Functions
        function writeMsg() {
            echo "Hello world!";
        }

        writeMsg();
        echo "<br>";

        // Function Arguments
        function familyName($fname) {
            echo "$fname Fontanilla.<br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        echo "<br>";

        // Function with 2 Arguments
        function familyName2($fname, $year) {
            echo "$fname Villafuentes. Born in $year <br>";
        }

        familyName2("Hege", "1975");
        familyName2("Stale", "1978");
        familyName2("Kai Jim", "1983");
        echo "<br>";

        // Loosely Type Language
        function addNumbers($num1, $num2) {
            return $num1 + $num2;
        }
        echo addNumbers(5, "5 days");
        echo "<br>";

        // Passing Arguments by Reference
        function add_five(&$value) {
            $value += 5;
        }
        $num3 = 2;
        add_five($num3);
        echo $num3;
    ?>
</body>

</html>