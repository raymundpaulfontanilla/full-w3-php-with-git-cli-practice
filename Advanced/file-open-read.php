<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Open && Read</title>
</head>

<body>
    <?php
        // Open File 
        $myFile = fopen("web-dictionary.txt", "r") or die ("Unable to open file!");
        echo fread($myFile, filesize("web-dictionary.txt"));
        fclose($myFile);
        echo "<br>";

        // Close File
        $myFile = fopen("web-dictionary.txt", "r");
        fclose($myFile);
        echo "<br>";

        // Read Single Line
        $myFile = fopen("web-dictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myFile);
        fclose($myFile);
        echo "<br>";
        echo "<br>";
        // Check End-Of-File
        $myFile = fopen("web-dictionary.txt", "r") or die("Unable to open file!");
        // Output one line until the end-of-file
        while (!feof($myFile)) {
            echo fgets($myFile) . "<br>";
        }
        fclose($myFile);
        echo "<br>";

        // Read Single Character
        $myFile = fopen("web-dictionar.txt", "r") or die("Unable to open file!");
        // Output one character until end-of-file
        while(!feof($myFile)) {
            echo fgetc($myFile);
        }
        fclose($myFile);
    ?>
</body>

</html>