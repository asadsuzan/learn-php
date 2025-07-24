<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php string</title>
</head>
<body>
    <?php
    
    
     echo "<h4>php string</h4>";
     echo "<p>strings are sequence of characters. string is surrounded by either in single or double quotes 
      There is a big difference  between , double quotes perform action for special characters ,single quotes does not. when a variable is put inside double quote it return the value of that variable,while single quote print as it is written
     </p>";
     
     echo "<h4>strlen() function returns the length of a string</h4>";
     $greeting = "good morning";
     echo strlen($greeting); //  12

    
     echo "<h4>word count</h4>";
     echo "<p>the str_word_count function return the number of words used in a string</p>";
     echo str_word_count($greeting);

     echo "<h4>search for a specific text within a string</h4>";
     echo "<p>the php strpos function searches for a specific text within a string. If a match found it will return the position of the first match ,if not it will return false</p>";
    
    $searchText = "Try to find a specific text within this string";
    echo strpos($searchText, "string");

    echo "<h4>Modify string</h4>";

    echo "<p>php has a set  of built in functions for modifying strings</p>";
    echo "<h4>uppercase: the strtoupper function returns the string in uppercase</h4>";
    $lower_case_str = "a string in lowercase";
    echo strtoupper($lower_case_str);


     
    echo "<h4>lowercase: the strtolower function returns the string in lowercase</h4>";
    $upper_case_str = "A StrinG IN UPPERCASE";
    echo strtolower($upper_case_str);
    
        echo "<h4>replace string: the str_replace function replaces some characters with some others characters within a string, it take three arguments 1. the word or characters to be replaced 2.the new word or charters 3. the string where the changes will be applied  </h4>";

        
echo str_replace("morning","afternoon",$greeting);
echo "<br>";

     echo "<h4>strrev- the strrev function reverse a string</h4>";

     echo strrev($greeting);

      echo "<h4>trim() -  the trim function remove whitespace form the begging and from the end of a string . whitespace is space before or after the actual text</h4>";

      $whitespace_str = "  text with whitespace   ";

      echo trim($whitespace_str);


       echo "<h4>explode()-  the explode function split a sting into an array. it takes two arguments 1. the  separator  and 2. is the string </h4>";

       print_r( explode(" ", $whitespace_str));

    
       echo "<h4>.(dot) -  is use to concatenate or combine two strings</h4> ";
       $txt1="hello";
       $txt2="teacher";
       echo $txt1 ." ". $txt2;
    
      echo "<h4>substr -  is use slice a string . it takes two arguments 1. the string index and the number of characters should be return after it. if the length argument is omitted it will return all the characters after the starting index</h4> ";

      $name="abdul karim";
      echo substr($name, 6,2);
      echo "<br>";
      echo substr($name, 6,);
       echo "<br>";
  
          echo substr($name, -4,2);
    
    ?>
</body>
</html>