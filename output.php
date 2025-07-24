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
 echo '<p>my name is '. $name . ' and im '. $age. ' years old</p>'
    ?>
</body>
</html>