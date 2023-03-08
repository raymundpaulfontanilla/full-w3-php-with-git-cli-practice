<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
            <?php 
                foreach (filter_list() as $id => $filter) { // Filter Extension
                    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
                }
            ?>
        </table>
        <br>
        <?php
            $str = "<h1>Hello World!</h1>";
            $newStr = filter_var($str, FILTER_SANITIZE_STRING); // remove all html tags from a string
            echo $newStr;
            echo "<br>";

            $int = 100;
            if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
                echo "Integer is valid";
            } else {
                echo "Integer is not valid";
            }
            echo "<br>";

            $ip = "127.0.0.1";
            if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
                echo "$ip is a valid IP address";
            } else {
                "$ip is not a valid IP address";
            }
            echo "<br>";

            $email = "raymundpaulfontanilla@gmail.com";

            // Remove all illegal characters from email
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Validate email
            if (!filter_var($email, FILTER_SANITIZE_EMAIL) === false) {
                echo "$email is a valid email address";
            } else {
                echo "$email is not a valid email address";
            }
            echo "<br>";

            $url = "https://www.w3schools.com";

            // Remove all illegal characters from a url
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Validate URL
            if (!filter_var($url, FILTER_SANITIZE_URL) === false) {
                echo "$url is a valid URL";
            } else {
                echo "$url is not a valid URL";
            }
        ?>
</body>

</html>