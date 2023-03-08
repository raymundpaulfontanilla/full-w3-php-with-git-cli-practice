<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>

<body>  
    <?php
        // Throw without catching it
        // function divide($dividend, $divisor) {
        //     if($divisor == 0) {
        //         throw new Exception("Division by zero");
        //     }
        //     return $dividend / $divisor;
        // }

        // echo divide(5, 0);
        // echo "<br>";

        // Throw with catch
        function divide2($dividend2, $divisor2) {
            if($divisor2 == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend2 / $divisor2;
        }
        try {
            echo divide2(5, 0);
        } catch(Exception $e) {
            echo "Unable to divide. ";
        }
        echo "<br>";

        // Throw and then indicate that the process has ended and the catch block is optional
        function divide3($dividend3, $divisor3) {
            if($divisor3 == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend3 / $divisor3;
        }
        try {
            echo divide3(5, 0);
        } catch(Exception $e) {
            echo "Unable to divide. ";
        } finally {
            echo "Process complete.";
        }
        echo "<br>";

        // Output a string even if an exception was not caught
        // function divide4($dividend4, $divisor4) {
        //     if($divisor4 == 0) {
        //         throw new Exception("Division by zero");
        //     }
        //     return $dividend4 / $divisor4;
        // }
        // try {
        //     echo divide4(5, 0);
        // } finally {
        //     echo "Process complete.";
        // }
        // echo "<br>";

        // Information about an exception that was thrown
        function divide5($dividend5, $divisor5) {
            if($divisor5 == 0) {
                throw new Exception("Division by zero", 1);
            }
            return $dividend5 / $divisor5;
        }
        try {
            echo divide5(5, 0);
        } catch(Exception $e) {
            $code = $e -> getCode();
            $message = $e -> getMessage();
            $file = $e -> getFile();
            $line = $e -> getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message"; 
        }
    ?>
</body>

</html>