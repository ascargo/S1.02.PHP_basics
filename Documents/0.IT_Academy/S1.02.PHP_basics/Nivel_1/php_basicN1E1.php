<?php
    // Declare a variable of each type: integer, double (float), string, and boolean.
    $age = 42; 
    $height = 1.62;
    $string = "Student's data information";
    $student = true;

    // Declare a constant  that includes your name.
    define("name", "Asier");

    //show the constant name in the screen.
    echo "<h1>" . name . "</h1>";
    
    // Print the variables out in the screen.
    echo $string . "<br>";
    echo "Is this person a current student? " . ($student ? 'Yes' : 'No') . "<br>";
    echo "Age: " .$age . "<br>";
    echo "Height: " .$height . "<br>";
?>