<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo / Print</title>
</head>

<body>
    <?php
        // Echo
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This is ", "string ", "was ", "made ", "with multiple parameters.";
        echo "<br>";

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $num1 = 5;
        $num2 = 4;

        echo "<h2>" .$txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $num1 + $num2;
        echo "<br>";

        // Print
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";
        echo "<br>";

        $txt3 = "Learn PHP";
        $txt4 = "W3Schools.com";
        $num3 = 5;
        $num4 = 4;

        print "<h2>" .$txt3. "</h2>";
        print "Study PHP at " . $txt4 . "<br>";
        print $num3 + $num4;
    ?>
</body>

</html>