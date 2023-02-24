<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <?php
        echo strlen("Hello World");
        echo "<br>";

        echo str_word_count("Hello World");
        echo "<br>";

        echo strrev("Hello World");
        echo "<br>";

        echo strpos("Hello World","World");
        echo "<br>";
        
        echo str_replace("World","Raymund","Hello World");
    ?>
</body>

</html>