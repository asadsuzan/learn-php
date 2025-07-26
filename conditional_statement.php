<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php conditional statement</title>
</head>
<body>
    <h4>php conditional statement</h4>
    <p>conditional statement is used to perform different actions based on different conditions</p>


    <?php
    
    
    // if statement is used to execute code based on one condition
    $age = 18;
    if($age >= 18){
        echo "you are an adult <br>";
    };
    
    // if..else statement is used to execute  code if a condition is not true
$time = date("H");
    if($time >= 12 ){
       echo "good afternoon <br>";
    }else{
        echo "good morning";
    };
    
    $t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
};

echo "<br>";

$a = 5;

if ($a < 10) $b = "Hello";


echo $b;

echo "<br>";

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

echo "<br>";


$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
};

echo "<br>";

$favColor = "red";

switch ($favColor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


    ?>
</body>
</html>