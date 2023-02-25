<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
    <?php
        // Arithmetic Operators

        $num1 = 10;
        $num2 = 6;
        echo $num1 + $num2;
        echo "<br>";

        $num3 = 10;
        $num4 = 6;
        echo $num3 - $num4;
        echo "<br>";

        $num5 = 10;
        $num6 = 6;
        echo $num5 * $num6;
        echo "<br>";

        $num7 = 10;
        $num8 = 6;
        echo $num7 / $num8;
        echo "<br>";

        $num9 = 10;
        $num10 = 6;
        echo $num9 % $num10;
        echo "<br>";

        $num11 = 10;
        $num12 = 3;
        echo $num11 ** $num12;
        echo "<br>";
        echo "<br>";

        // Assignment Operators
        $num13 = 10;
        echo $num13;
        echo "<br>";

        $num14 = 20;
        $num14 += 100;
        echo $num14;
        echo "<br>";

        $num15 = 50;
        $num15 -= 30;
        echo $num15;
        echo "<br>";

        $num16 = 5;
        $num16 *= 6;
        echo $num16;
        echo "<br>";

        $num17 = 10;
        $num17 /= 5;
        echo $num17;
        echo "<br>";

        $num18 = 15;
        $num18 %= 4;
        echo $num18;
        echo "<br>";
        echo "<br>";

        // Comparison Operators

        $num19 = 100;
        $num20 = "100";
        var_dump($num19 == $num20);
        echo "<br>";

        $num21 = 100;
        $num22 = "100";
        var_dump($num21 === $num22);
        echo "<br>";

        $num23 = 100;
        $num24 = "100";
        var_dump($num23 != $num24);
        echo "<br>";

        $num25 = 100;
        $num26 = "100";
        var_dump($num25 <> $num26);
        echo "<br>";

        $num27 = 100;
        $num28 = "100";
        var_dump($num27 !== $num28);
        echo "<br>";

        $num29 = 100;
        $num30 = 50;
        var_dump($num29 > $num30);
        echo "<br>";

        $num31 = 10;
        $num32 = 50;
        var_dump($num31 < $num32);
        echo "<br>";

        $num33 = 50;
        $num34 = 50;
        var_dump($num33 >= $num34);
        echo "<br>";

        $num35 = 50;
        $num36 = 50;
        var_dump($num35 <= $num36);
        echo "<br>";

        $num37 = 5;
        $num38 = 10;

        echo ($num37 <=> $num38);
        echo "<br>";

        $num39 = 10;
        $num40 = 10;
        echo ($num39 <=> $num40);
        echo "<br>";

        $num41 = 15;
        $num42 = 10;
        echo ($num41 <=> $num42);
        echo "<br>";
        echo "<br>";

        // Increment / Decrement Operators

        // Pre-increment
        $num43 = 10;
        echo ++$num43;
        echo "<br>";

        // Post-increment
        $num44 = 10;
        echo $num44++;
        echo "<br>";

        // Pre-decrement
        $num45 = 10;
        echo --$num45;
        echo "<br>";

        // Post-decrement
        $num46 = 10;
        echo $num46--;
        echo "<br>";
        echo "<br>";

        // Logical Operators
        
        $num47 = 100;
        $num48 = 50;

        if ($num47 == 100 and $num48 == 50) {
            echo "Hello AND";
        }
        echo "<br>";

        $num49 = 100;
        $num50 = 50;

        if ($num49 == 100 or $num50 == 50) {
            echo "Hello OR";
        }
        echo "<br>";

        $num51 = 100;
        $num52 = 50;

        if ($num51 == 100 xor $num52 == 80) {
            echo "Hello Xor";
        }
        echo "<br>";

        $num53 = 100;
        $num54 = 50;

        if ($num53 == 100 && $num54 == 50) {
            echo "Hello AND &&";
        }
        echo "<br>";

        $num55 = 100;
        $num56 = 50;

        if ($num55 == 100 || $num56 == 50) {
            echo "Hello OR ||";
        }
        echo "<br>";

        $num57 = 100;

        if ($num57 !== 90) {
            echo "Hello !Not";
        }
        echo "<br>";
        echo "<br>";

        // String Operators

        $txt1 = "Hello";
        $txt2 = " world!";
        echo $txt1.$txt2;
        echo "<br>";

        $txt3 = "Hi";
        $txt4 = " world!";
        $txt3 .= $txt4;
        echo $txt3;
        echo "<br>"; 
        echo "<br>";

        // Array Operators

        $array1 = array("a" => "red", "b" => "green");
        $array2 = array("c" => "blue", "d" => "yellow");
        print_r($array1 + $array2);
        echo "<br>";
        
        $array3 = array("a" => "red", "b" => "green");
        $array4 = array("c" => "blue", "d" => "yellow");
        var_dump($array3 == $array4);
        echo "<br>";

        $array5 = array("a" => "red", "b" => "green");
        $array6 = array("c" => "blue", "d" => "yellow");
        var_dump($array5 === $array6);
        echo "<br>";

        $array7 = array("a" => "red", "b" => "green");
        $array8 = array("c" => "blue", "d" => "yellow");
        var_dump($array7 != $array8);
        echo "<br>";

        $array9 = array("a" => "red", "b" => "green");
        $array10 = array("c" => "blue", "d" => "yellow");
        var_dump($array9 <> $array10);
        echo "<br>";

        $array11 = array("a" => "red", "b" => "green");
        $array12 = array("c" => "blue", "d" => "yellow");
        var_dump($array11 !== $array12);
        echo "<br>";
        echo "<br>";

        // Conditional Assignment Operators

        echo $status = empty($user) ? "anonymous" : "logged in";
        echo "<br>";
        
        $user = "Raymund";
        echo $status = empty($user) ? "anonymous" : "logged in";
        echo "<br>";
        echo "<br>";

        echo $user = $_GET["user"] ?? "anoymous";
        echo "<br>";
        echo $color = $color ?? "red";
    ?>
</body>

</html>