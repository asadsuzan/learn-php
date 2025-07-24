<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    
<h1>variables</h1>
<?php
  
  $txt = "w3schools.com";

  echo "lean the php basics from $txt";

  $x=5;
  $y=10;
  $sum=$x+$y;
  echo "<br>";
  echo $sum;
    echo "<br>";

  //  again a single value to multiple variable 
  $a=$b=$c="something";
  echo $a;
    echo "<br>";
  echo $b;
    echo "<br>";
  echo $c;
  echo "<br>";
  $string= "strings";
  echo var_dump($string);
      echo "<br>";
  $int= 50;
  echo var_dump($int);
      echo "<br>";
   $double=5.5;
   echo var_dump($double);
    echo "<br>";
   



?>


</body>
</html>