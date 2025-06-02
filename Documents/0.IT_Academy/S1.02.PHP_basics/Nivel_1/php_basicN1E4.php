<?php
function countingApp($endNumber = 10, $countingIncrements = 1) {
    $currentNumber = 0; // Initialize the starting number

        while ($currentNumber + $countingIncrements <= $endNumber) {
            echo $currentNumber . ", "; // Print the current number
            $currentNumber += $countingIncrements; // Increment the current number by the specified counting increments
        }
//As the programme does not count until exactly the end number, we need to print the end number if it was not reached in the loop.
        if($currentNumber != $endNumber) {
            echo $endNumber . "."; // Print the end number if it was not reached in the loop
        } else {
            echo $currentNumber . ".";
        }
    }

countingApp(50, 6); // Call the function with example values
echo "<br>";

countingApp(6);
echo "<br>";

countingApp();
 echo "<br>";
?>