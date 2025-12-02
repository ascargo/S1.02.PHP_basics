<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$X = 10;
$Y = 4;

$N = 1.23;
$M = 4.56;

echo $X . "<br>";
echo $Y . "<br>";
echo "The sum of X and Y is: " . ($X + $Y) . "<br>";
echo "The difference of X and Y is: " . ($X - $Y) . "<br>";
echo "The product of X and Y is: " . ($X * $Y) . "<br>";
echo "The modulus (remainder of the division) of X and Y is: " . ($X % $Y) . "<br>";

echo $M . "<br>";
echo $N . "<br>";
echo "The sum of M and N is: " . ($M + $N) . "<br>";
echo "The difference of M and N is: " . ($M - $N) . "<br>";
echo "The product of M and N is: " . ($M * $N) . "<br>";
echo "the modulus of M and N is: " . fmod($M, $N) . "<br>";

echo "The double of " . $X . " is: " . ($X * 2) . "<br>";
echo "The double of " . $Y . " is: " . ($Y * 2) . "<br>";
echo "The double of " . $M . " is: " . ($M * 2) . "<br>";
echo "The double of " . $N . " is: " . ($N * 2) . "<br>";
echo "The total sum of all the values is: " . ($X + $Y + $M + $N) . "<br>";
echo "The total product of all the values is: " . ($X * $Y * $M * $N) . "<br>";

function calculator(int|float $A, int|float $B, string $operation): int|float|string {
    switch ($operation) {
        case '+':
            return $A + $B;
        case '-':
            return $A - $B;
        case '*':
            return $A * $B;
        case '/':
            if ($B != 0) {
                return $A / $B;
            }
            return "Division by zero error";
        default:
            return "Invalid operation";
    }
}

echo "The result of the calculator function is: " . calculator(7, 3.4, '/') . "<br>";
