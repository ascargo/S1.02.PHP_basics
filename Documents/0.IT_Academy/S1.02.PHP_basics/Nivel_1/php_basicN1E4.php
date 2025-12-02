<?php
declare(strict_types=1);

function countTo(int $endNumber = 10, int $countingIncrements = 1): void
{
    if ($countingIncrements <= 0) {
        echo "Increments should be positive numbers. I.e. -5 is not allowed.";
        return;
    }

    $currentNumber = 0;

    do {
        echo $currentNumber >= $endNumber ? $endNumber. "." : $currentNumber . ",";
        $currentNumber += $countingIncrements;
    } while ($currentNumber < $endNumber);
}

countTo(50, 6);
echo "<br>";

countTo(6);
echo "<br>";

countTo();
echo "<br>";
?>
