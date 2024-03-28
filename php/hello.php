<!DOCTYPE html>
<html>
    <head>
        <title> PHP Lesson 1 </title>
    </head>

    <body>
        <?php
        echo "<h1> Welcome to PHP!</h1>";
        echo "<br>";
        echo "It's a great language to know";
        echo "<br><br>";
        echo "<h2> This is my first PHP website</h2>";
        $name = "Owen McDonough";
        echo "Hello " . $name . "! (with concatenation)";
        echo "<br>";
        echo "Hello $name! (with interpolation)";
        echo "<br>";
        echo 'Hello $name!';
        echo "<br><br>"
        //math
        $x = 5;
        $y = 3;
        
        echo "$x * $y = " . ($x * $y);

        function square($number)
        {
            return $number * $number;
        }

        echo "4 squared is " . square(4);
        ?>
    </body>
</html>