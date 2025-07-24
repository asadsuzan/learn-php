<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output statement</title>
</head>
<body>
    <?php
    
    
    /* there are  two basic ways to get output in php. 
         1. echo 2. print

         echo and print are more or less the same . they both used to output data to screen
          the difference are small. echo has no return value while print has a return value of 1 so it can be used within  expression. echo can take multiple arguments although this usage is rare . print can have only one argument. echo is marginally faster than print



        */
    

          //   php echo statement | the echo statement can be used with or without parentheses 
 echo "<h1>The PHP echo Statement</h1>";
  echo "hello world without parentheses <br>";
  echo ("hello world with parentheses <br>");

  // display text 
  echo "<h1>Display text</h1>";
  echo "php is fun! <br>";
  echo "Im about to learn php !<br>";
  echo "this ","text ","is ","made with multiple arguments <br>";
    

//  display variables with text 
   
 echo "<h1>Display variables with text </h1>";
 $txt="today im learning php";
 $txt2 ="w3Schools.com";


 echo "$txt at $txt2 <br>" ;


 // using single quotes 
 //  strings are surrounded by quotes. but there are little differences between single and double quotes

 // when using double quotes variables can be inserted directly into the strings as shown above examples
 // but when using single quotes , variable have to be instead with . (dot) operator

 $name="asad";
 $age=25;
 echo '<p>my name is '. $name . ' and im '. $age. ' years old</p> <br>';



// The PHP print Statement
// the print statement can be used with or without parentheses 
 echo "<h1>The PHP print Statement</h1>";
print "hello without parentheses <br>";
//same as 
print("hello with parentheses <br>");

  // display text 
  echo "<h1>Display text</h1>";


print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!<br>";

$txt12 = "Learn PHP";
$txt21 = "W3Schools.com";

print "<h2>$$txt12</h2>";
print "<p>Study PHP at $txt21</p>";


/*

sing Single Quotes
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this:

*/



$txt133= "Learn PHP";
$txt211 ="W3Schools.com";

print '<h2>' . $txt133 . '</h2>';
print '<p>Study PHP at ' . $txt211 . '</p>';
    ?>
</body>
</html>