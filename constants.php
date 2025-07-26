<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php constants</title>
</head>
<body>
    <?php
    
    echo "<h4>php contestant</h4>";
    echo "<p>php constant is a identifier (name) for a simple value. Once they created or defined they can not be changed. To define constant use the define() function. it take 3 arguments. 1. the name of the variable, 2. the value,  and 3. is a boolean value to determine whether its case sensitive or insensitive </p>";
    
    define("greetings","good afternoon");

    echo greetings;
    
    
    
    echo "<br>";


        echo "<h4>php const keyword</h4>";
        echo "<p>constants can created with the php const keyword. the main differences between const keyword and define function is , constant can not be declared with const keyword inside another block like function or a if statement. but it can declared with define function within another block</p>";
    

        const name = "sheik hasina";
        echo name
    
    
    ?>
</body>
</html>