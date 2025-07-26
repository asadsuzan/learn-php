<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php math</title>
</head>
<body>
    <?php
    
    echo "<h4>php  has set of builtin functions to do mathematical operations  on numbers </h4>";
    
    
    echo "<p>pi() function return the value of pi</p>";
    
    echo pi();    




     echo "<h4>php min() and max() function is used to find the highest or lowest value from a list of arguments</h4>";

    echo max(10,20,30);
    echo "<br>";
    echo min(10,20,30);

    echo "<br>";
   echo "<h4>php abs() function is used to get the absolute positive value of a number </h4>";


echo abs(-4.5);

 echo "<h4>php sqrt() function return the square root of a number </h4>";
 echo sqrt(81);



 echo "<h4>php round() function round a floating point number to its nearest integer value </h4>";

  echo round(0.49);
  echo "<br>"  ;
  echo round(0.51);




 echo "<h4>php rand() function return a random number, upon min and max arguments are provided it return a rand number between</h4>";

   echo rand();
     echo "<br>"  ;
     echo rand(1,5);



    ?>
</body>
</html>