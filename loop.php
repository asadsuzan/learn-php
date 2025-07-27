<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php loop</title>
</head>
<body>
   <h4> In PHP, we have the following loop types:</h4>

<p>while - loops through a block of code as long as the specified condition is true</p>
<p>do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true</p>
<p>for - loops through a block of code a specified number of times</p>
<p>foreach - loops through a block of code for each element in an array</p>





<?php

// print $i as long $i is less then 6

$i=1;
while($i<6){
    echo "$i";
    $i++ ;
};
echo "<br>";

$j= 1;
// the break statement 
while($j<10){
 if($j===3) break;
 echo $j;
 $j++;

};


echo "<br>";

// continue statement 
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 4) continue;
  echo $i;
}

echo "<br>";

// Alternative Syntax
// The while loop syntax can also be written with the endwhile statement like this




$a= 0;
while($a<5):
    echo $a;
 
    $a++;
endwhile;


echo  "<br>";

//The PHP do...while Loop
// The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.


$x=4;

do {
   print "hello";
} while ($a >10);



echo "<br>";

// The PHP for Loop
// The for loop is used when you know how many times the script should run.




for($y=0; $y<10; $y++){
    if($y == 5) continue;
    if($y==6) break;
    echo "$y <br>";
};

echo  "<br>";


// The foreach Loop on Arrays
// The most common use of the foreach loop, is to loop through the items of an array.

$colors = array('red','green','blue');

foreach($colors as $color){
    echo "$color <br>";
};





$students = array("habul"=>"1","kabul"=>"2");

foreach($students as $student=>$roll){
    echo "$student: $roll <br>";
}
echo "<br>";
// By default, changing an array item will not affect the original array: but By assigning the array items by reference, changes will affect the original array:
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
echo "<br>";
foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
};

var_dump($colors);




echo "<br>";


// Alternative Syntax
// The foreach loop syntax can also be written with the endforeach statement like this
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
?>












</body>
</html>