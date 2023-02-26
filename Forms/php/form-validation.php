<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br><br>
        <input type="submit">
    </form>
    <?php
        $name = $email = $website = $comment = $gender = ""; // define variables and set to empty values
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $website = test_input($_POST['website']);
            $comment = test_input($_POST['comment']);
            $gender = test_input($_POST['gender']);
        }

        function test_input($data) {
            $data = trim($data); // Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
            $data = stripslashes($data); // Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
            $data = htmlspecialchars($data); // converts special characters to HTML entities. Countermeasure to XSS attacks.
            return $data;
        }

        echo $name . "<br>";
        echo $email. "<br>";
        echo $website. "<br>";
        echo $comment. "<br>";
        echo $gender. "<br>";
    ?>
</body>

</html>