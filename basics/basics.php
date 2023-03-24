<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
 <h1>Garima Dhakal 77261088</h1> 
 </header>
 
 <section id="container">
 <h1>Fundamentals of PHP</h1>
    <?php
            echo "Name: Garima Dhakal<br>";
            echo "Student Id: 77261088<br>";
            echo "<br>\"Most programmer says it's better to use 'echo' rather than 'printf'\" says who?";
            
            $name = "David";
            $age = "12";
            echo "<br>Hi my name is '" . $name . "' and I am " . $age . " years old";
            echo "<br>Mi nombre es $name y tengo $age anos de edad";

            echo "<h1>Functions</h1>";
            //gettype()returns..
            echo gettype($name);
            echo '<br />';
            //strlen() returns..
            echo strlen($name);
            echo '<br />';
            //strtoUpper()returns..
            echo strtoUpper($name);

            echo "<h1>Arithmatic</h1>";
            $num1 = "9";
            $num2 = "12";
            echo "<br>num1 = $num1";
            echo "<br>num2 = $num2";
            $product = $num1 * $num2;
            echo "<br>num1 X num2 = $product";
            $percentage = ($num1/$num2)*100;
            echo "<br>num1 as a percentage of num2 =$percentage%";
            $remainder = $num2%$num1;
            echo "<br>num2 divided by num1 = 1 remainder $remainder";

            echo"<h2>Height</h2>";
            $height_meters = 1.8;
            echo "Name: $name<br>";
            echo "Age: $age<br>";
            echo "Height in meters: $height_meters<br>";
            $height_inches = ($height_meters*100)/2.54;
            $height_feet = floor($height_inches/12);
            echo "Height in Feet and Inches: $height_feet ft " ;
    ?>
 </section>
 <footer> 
 <small> <a href="../watIndex.html">Home</a></small>
 </footer>
 </body>
</html>