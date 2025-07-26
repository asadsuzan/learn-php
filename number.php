<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php numbers</title>
</head>
<body>
    <?php
    
    echo "<h4>php numbers</h4>";
    echo "<p>There are main main numeric types in php</p>";
    echo "<p>1.Integer 2. Float 3.Number string</p>";
    echo "<p>In addition php has two more data types used for numbers </p>";
    echo "<p>1.Infinity 2.NAN</p>";

    // examples 
    $a=25;$b=2.5;$c="25";
    var_dump($a);
    var_dump($b);
    var_dump($c);
    
    
       echo "<h4>php Integers</h4>";
    echo "<p>An integer is a number without any decimal part between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer. Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).</p>";
    $x=4;$y=2.5;
    $multiplication = $x*$y;
    var_dump($multiplication);
    echo "<br>";
    $c = 1;
    $sum= $multiplication+$c;
    var_dump($sum);


       echo "<h4>php has the three following constants for integers</h4>";
       echo "<p>1.PHP_INT_MAX</p>";
       echo "<p>2.PHP_INT_MIN</p>";
       echo "<p>3.PHP_INT_SIZE</p>";
     
       echo PHP_INT_MAX;
         echo "<br>";
       echo  PHP_INT_MIN;
         echo "<br>";
       ECHO PHP_INT_SIZE;
     
    
  echo "<h4>php has the three following FUNCTION to check if a number is integer</h4>";
       echo "<p>1. is_int()</p>";
       echo "<p>2. is_integer() -  alias of is_int()</p>";
       echo "<p>3. is_long() -  alias for is_int</p>";

       var_dump(is_int($a)) ;
       var_dump( is_integer($b));
       var_dump(is_long($c)) ;

   

    echo "<h4>php float number</h4>";
    echo "<p>a floating point number is a number with decimal part .The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.</p>";

      echo "<h4>php has the three following constants for floating numbers</h4>";
       echo "<p>1.PHP_FLOAT_MAX</p>";
       echo "<p>2.PHP_FLOAT_MIN</p>";
       echo "<p>3. PHP_FLOAT_DIG</p>";
       echo "<p>5. PHP_FLOAT_EPSILON</p>";
    

              echo PHP_FLOAT_MAX;
         echo "<br>";
       echo  PHP_FLOAT_MIN;
         echo "<br>";
       ECHO PHP_FLOAT_DIG;
         echo "<br>";
         echo  PHP_FLOAT_EPSILON;




  echo "<h4>php has the three following FUNCTION to check if a number is DOUBLE OR FLOAT</h4>";
       echo "<p>1.is_float()</p>";
       echo "<p>2. is_double -  alias of is_float</p>";
     



var_dump(is_float($x));
    echo "<br>";
var_dump(is_double($y));







  echo "<h4>php infinite</h4>";
       echo "<p>A numeric value larger than PHP_FLOAT_MAX is considered infinite</p>";
       echo "<p>php has the following functions to check if a numeric value is finite or infinite</p>";
       echo "<p>1. is_finite 2. is_infinite()</p>";

       $d = 2135434543534;
       $o = PHP_FLOAT_MAX + 200;
       var_dump($d);
       var_dump($o);







  echo "<h4>php NAN - is stands for not a number</h4>";
       echo "<p>php has one function to if a value is nan is is_nan</p>";
    
$txt = "25";
    var_dump(is_nan($txt));
    echo "<br>";






  echo "<h4>php numerical string</h4>";
       echo "<p>the is_numeric() function is used to check if a value is numeric . it return true if it is numeric otherwise false</p>";
    

       $numeric = "sajdgask";
var_dump(is_numeric($numeric))


    ?>
</body>
</html>