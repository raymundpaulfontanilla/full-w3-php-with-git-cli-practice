<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Filters</title>
</head>

<body>
    <?php
        $int = 122;
        $min = 1;
        $max = 200;
        
        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => $min, "max-range" => $max)) === false) {
            echo "Variable value is not within the legal range";
        } else {
            echo "Variable value is within the legal range";
        }
        echo "<br>";

        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

        if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
            echo "$ip is a valid IPv6 address";
        } else {
            echo "$ip is not a valid IPv6 address";
        }
        echo "<br>";

        $url = "https://www.w3schools.com";

        if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
            echo "$url is a valid URL with a query string";
        } else {
            echo "$url is a not valid URL with a query string";
        }
        echo "<br>";

        $str = "<h1>Hello WorldÆØÅ!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); //remove all HTML tags, and all characters with ASCII value > 127
        echo $newstr;
    ?>
</body>

</html>