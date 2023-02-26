<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email && URL Form Validation</title>

    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
        $nameErr = $emailErr = $websiteErr = $genderErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['name'])) {
                $nameErr = "Name is required";
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                    $nameErr = "Only letters and white space allowed";
                } else {
                    $name = test_input($_POST['name']);
                }
            }
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST['email']);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                }
        }
        if (empty($_POST['website'])) {
            $website = "";
        } else {
            $website = test_input($_POST['website']);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }
        if (empty($_POST['comment'])) {
            $comment = "";
        } else {
            $comment = test_input($_POST['comment']);

        }
        if (empty($_POST['gender'])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST['gender']);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Name: <input type="text" name="name"> <span class="error">* <?php echo $nameErr; ?> </span><br><br>
            Email: <input type="email" name="email"> <span class="error">* <?php echo $emailErr; ?> </span><br><br>
            Website: <input type="text" name="website"> <span class="error">* <?php echo $websiteErr; ?> </span><br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr;?></span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

    <?php
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>
</body>

</html>