<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Variable Values</title>
</head>

<body>
    <?php
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
        print_r($_SESSION); // show all the sessions variable values for a user session
        echo "<br>";

        // to change a session variable, just overwrite it
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);

        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    ?>
</body>

</html>