<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create && Write</title>
</head>

<body>
    <?php
        // Create File
        $myFile = fopen("test-file.txt", "w");
        echo $myFile;

        // Write to File
        $myFile2 = fopen("new-file.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myFile2, $txt);
        $txt = "Jane Doe\n";
        fwrite($myFile2, $txt);
        fclose($myFile2);

        // Overwriting
        $myFile2 = fopen("new-file.txt", "w") or die("Unable to open file!");
        $txt = "Mickey Mouse\n";
        fwrite($myFile2, $txt);
        $txt = "Minnie Mouse\n";
        fwrite($myFile2, $txt);
        fclose($myFile2);

        // Append Text
        $myFile2 = fopen("new-file.txt", "a") or die("Unable to open file!");
        $txt = "Donald Duck\n";
        fwrite($myFile2, $txt);
        $txt = "Goofy Goof\n";
        fwrite($myFile2, $txt);
        fclose($myFile2);
    ?>
</body>

</html>