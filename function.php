<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php functions</title>
</head>
<body>
    
<?php 



// PHP FUNCTION SYNTAX

function myMessage (){
    echo "hello from php function";
};


myMessage();

echo "<br>";

// FUNCTION ARGUMENTS 

function familyName($fname){
    echo "your name is $fname <br>";
};

familyName("jani");
familyName("jon");
 

//  multiple argument

function multiArg($name,$age){
    echo "my name is $name and im $age years old <br>";
};
multiArg('asad',25);





// default arguments

function height($minHeight=50){
    echo "the minimum height is: $minHeight <br>";
}


height();
height(200);




// returning value / return statement 

function sum($a,$b){
    return $a+$b;
}

echo (sum(1,2));
echo "<br>";
echo (sum(10,2));
echo "<br>";



// Use a pass-by-reference (& is used for reference)  argument to update a variable:

function increaseByFive(&$value){
    $value+=5;
}

$numb =5;
increaseByFive($numb);
echo $numb;

echo "<br>";

// Variable Number of Arguments
// By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

// The variadic function argument becomes an array. a function can have one variable length and it should be the last argument

// Example
// A function that do not know how many arguments it will get:

function addNumbers(...$x){
    $result = 0;
    for($i=0;$i<count($x);$i++){
        $result+=$x[$i];
    }

    return $result;
};

$sum = addNumbers(1,2,3,4,1);
echo ($sum);
echo "<br>";

// function with type declarations

function multiply(int $a,int $b){
    echo $a*$b;
};

echo(multiply(3,3));


echo "<br>";

// PHP Return Type Declarations





function addition (float $a,float $b):float{
    return $a+$b;
};

echo addition(1.3,1.3);




?>



</body>
</html>