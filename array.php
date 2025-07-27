    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php array</title>
    </head>
    <body>
            <h1>php array</h1>
            <h4> What is an Array?</h4>
            <p>An array is a special variable that can hold many values under a single name, and we can access the values by referring to an index number or name</p>



<h5>PHP Array Types</h5>
<p>In PHP, there are three types of arrays:</p>
<ol>
    <li>Indexed arrays - Arrays with a numeric index</li>
    <li>Associative arrays - Arrays with named keys or key value pair</li>
    <li>Multidimensional arrays - Arrays containing one or more arrays inside</li>
</ol>



<?php


echo "<h5>PHP Indexed Arrays</h5>";
$cars = array("volvo","primo","BMD");

var_dump($cars);
echo "<br>";


echo "<h5>Access Indexed array</h5>";
echo "<p>to access an indexed array item we can refer to the index number. By default the first item has index 0 and the second item has index 2 and so on</p>";

echo $cars[0];
echo "<br>";
echo $cars[1];
echo "<br>";
echo $cars[2];
echo "<br>";
echo $cars[6];  // undefined index
echo "<br>";


echo "<h5>Change array item value</h5>";
echo "<p>To change the value of an array item use the index number</p>";

$cars[0] = "Tesla";

var_dump($cars);


echo "<h5>Loop through indexed array</h5>";

foreach($cars as $car){
    echo "$car <br>";
};


$cars[10] = "Corola";

var_dump($cars);
array_push($cars,"Honda");
echo "<br>";
var_dump($cars);
echo "<br>";

echo "<h5>PHP Associative arrays</h5>";
echo "<p>Associative arrays that use named keys that you assigned</p>";


$cars = array("brand"=>"Ford","Name"=>"Mustang","year"=>1965);




echo "<h5>Access Associative Arrays</h5>";

echo "<p>To access an array item you can refer to the key name.</p>";

echo $cars["Name"];
echo "<br>";

echo "<h5>Change value</h5>";
echo "<p>To change the value of an array item, use the key name:</p>";

$cars["Name"]  = "Robs Rowel";
$cars["year"]  = 2025;

var_dump($cars);

echo "<h5>loop through associative arrays</h5>";

foreach($cars as $key =>$value){
    echo "$key : $value <br>";
};

echo "<br>";

echo "<h5>Mixing Array Keys</h5>";

$students = array("efti"=>"Dinajpur", "rakib"=>"mymanshing", "mondol");

var_dump($students);
echo "<br>";

echo $students[0];
echo $students[1]; // undefined
echo "<br>";
echo $students['efti'];

echo "<br>";


echo "<h5>Remove array items</h5>";
echo "<p>to remove an existing item from an array use array_splice () function. with this we specifies the index where to start removing and how many items should be removed. unset() function also can be used to remove array items</p>";

$fruits = array('apple',"orange","banana","mango");
var_dump($fruits);

echo "<br>";
array_splice($fruits,0,1);
unset($fruits[3]);
var_dump($fruits);

echo "<br>";


$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["year"]);

// create an new array without Ford
$dummy = array_diff($cars,["Ford"]);

print_r( $cars);

echo "<br>";
print_r( $dummy);

echo "<h4>Remove the Last Item</h4>";
echo "<p>array_pop() function remove the last item from an array</p>";

$points = array(1,2,3,4,5,6);
array_pop($points);

print_r($points);
echo "<br>";

$inventory = array("shirt"=>15, "pant"=>20, "TShirt"=>10);
print_r($inventory);
echo "<br>";
array_pop($inventory);
print_r($inventory);

$inventory = array("shirt"=>15, "pant"=>20, "TShirt"=>10);
echo "<h4>Remove the first Item</h4>";
echo "<p>array_shift () function remove the first item from an array</p>";
array_shift($inventory);
print_r($inventory);



echo "<h3>PHP Sorting Arrays</h3>";
echo('<pre>');
print_r( "sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key" );
echo('</pre>');


// Sort Array in Ascending Order - sort()

$cars = array("Volvo", "BMW", "Toyota");
$numbs = array(20,30,1,2);
sort($numbs);

sort($cars);

print_r($cars);
echo "<br>";
print_r($numbs);

echo "<br>";
// Sort Array in Descending Order - rsort()

rsort($cars);
rsort($numbs);
print_r($cars);
echo "<br>";
print_r($numbs);
echo "<br>";




// Sort Array (Ascending Order), According to Value - asort()

$inventory = array("shirt"=>15, "pant"=>20, "TShirt"=>10);

asort($inventory);
print_r($inventory);

echo "<br>";

// Sort Array (Ascending Order), According to Key - ksort()

ksort($inventory);
print_r($inventory);

echo "<br>";

// Sort Array (Descending Order), According to Value - arsort()

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
print_r($age);

echo "<br>";

// Sort Array (Descending Order), According to Key - krsort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_r($age);

echo "<br>";



echo "<h4>PHP Multidimensional Arrays</h4>";

echo "<p>A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.</p>";



$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

print_r($cars);





?>

    </body>
    </html>