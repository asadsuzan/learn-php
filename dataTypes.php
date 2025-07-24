<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data types</title>
</head>
<body>
    <h1>php data types</h1>
    <ol>
        <li>
            string

        </li>
        <li>integer</li>
        <li>double/floating point number</li>
        <li>array</li>
        <li>object</li>
        <li>null</li>
        <li>resource</li>
    </ol>

    <?php
    
  echo "<h1>php data types</h1><br>";

   // string - a sequence of characters 
   $txt = "this a string data types";
   var_dump($txt);
    echo "<br>";
   // integer - i integer data type is a non decimal number 
   $age = 25;
   var_dump($age);
      echo "<br>";
    
    // double or float -  is a number with decimal point 

    $score = 1.24;
    var_dump($score);
        echo "<br>";

//   array -  store multiple data in  a single variable
$cites = array("Dhaka","Dinajpur","Barishal");
var_dump($cites);
       echo "<br>";
    

       // null -  when  a variable is declare but not assigned value to it , by default it will have a null value, we can explicitly assign null to a variable

       $empty = null ;
       var_dump($empty)



    ?>
</body>
</html>