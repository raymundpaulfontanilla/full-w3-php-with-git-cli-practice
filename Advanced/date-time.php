<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
</head>

<body>
    <?php
        // Get a Date
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
        echo "<br>";
    ?>
    <!-- Automatic Copyright Year -->
    &copy; 2010 - <?php echo date("Y") . "<br>"; ?>

    <?php
        // Get a Time
        echo "The time is " .date("h:i:sa");
        echo "<br>";

        // Get Your Time Zone
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
        echo "<br>";

        // Create a Date
        $date = mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $date);
        echo "<br>";

        // Create a Date From a String
        $date2 = strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $date2);
        echo "<br>";

        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);

        while ($startdate < $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }

        $date3 = strtotime("July 04");
        $date4 = ceil($date3 - time()/60/60/24);
        echo "There are" . $date4. " days until 4th of July.";
    ?>
</body>

</html>