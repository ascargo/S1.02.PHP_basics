<?php
function countingApp($endNumber = 10, $countingIncrements = 1) {
    $currentNumber = 0;

        while ($currentNumber + $countingIncrements <= $endNumber) {
            echo $currentNumber . ", ";
            $currentNumber += $countingIncrements;
        }
//As the programme does not count until exactly the end number, we need to print the end number if it was not reached in the loop.
        if($currentNumber != $endNumber) {
            echo $endNumber . ".";
        } else {
            echo $currentNumber . ".";
        }
    }

countingApp(50, 6);
echo "<br>";

countingApp(6);
echo "<br>";

countingApp();
 echo "<br>";
?>
