<?php
    // Create/Retrieve a Cookie
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    // Modify a Cookie Value
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    // Delete a Cookie
    setcookie("user", "", time() - 3600);

    // Check if Cookies are Enabled
    setcookie("test_cookie", "test", time() + 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <?php
        // Condition for Create/Retrieve a Cookie
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set! ";
        } else {
            echo "Cookie '" . $cookie_name . "' is set! <br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        echo "<br>";

        // Condition for Modify a Cookie Value
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name ."' is set! <br>";
            echo "Value is: " .$_COOKIE[$cookie_name];
        }
        echo "<br>";

        echo "Cookie 'user' is deleted";

        echo "<br>";

        // Condition for Cookies are Enabled
        if (count($_COOKIE) > 0) {
            echo "Cookies are enabled";
        } else {
            echo "Cookies are disabled";
        }
    ?>
</body>

</html>