<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>
    <?php
        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting W3schools.com!";
        }

        echo Goodbye::LEAVING_MESSAGE;// Accessing a constant from outside of the class with resop ::
        echo "<br>";

        class Hello {
            const WELCOME_MESSAGE = "Goodmorning";

            public function byeBye() {
                echo self:: WELCOME_MESSAGE; // Accessing a constant from inside of the class with self and resolution operator (::)
            }
        }

        $hello = new Hello();
        $hello -> byeBye();
    ?>
</body>

</html>