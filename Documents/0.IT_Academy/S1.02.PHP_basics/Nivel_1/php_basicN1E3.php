<?php 
// Declare two int variables X and Y.
$X = 10; 
$Y = 4;

// Declare a two float variables N and M.
$N = 1.23;
$M = 4.56;

// For X and Y, print the following operations on the screen:
echo $X ."<br>";
echo $Y ."<br>";
echo "The sum of X and Y is: " . ($X + $Y) . "<br>";
echo "The difference of X and Y is: " . ($X - $Y) . "<br>";
echo "The product of X and Y is: " . ($X * $Y) . "<br>";
echo "The modulus (remainder of the division) of X and Y is: " . ($X % $Y) . "<br>";

// For M and N, print the following operations on the screen:
echo $M ."<br>";
echo $N ."<br>";
echo "The sum of M and N is: " . ($M + $N) . "<br>";
echo "The difference of M and N is: " . ($M - $N) . "<br>";
echo "The product of M and N is: " . ($M * $N) . "<br>";
echo "the modulus of M and N is: " . fmod($M, $N) . "<br>"; // Modulus of M and N. With float values, we use fmod() for modulus operation.

// for all the values, print the following operations on the screen:
echo "The double of " . $X . " is: " . ($X * 2) . "<br>";
echo "The double of " . $Y . " is: " . ($Y * 2) . "<br>";
echo "The double of " . $M . " is: " . ($M * 2) . "<br>";
echo "The double of " . $N . " is: " . ($N * 2) . "<br>";
echo "The total sum of all the values is: " . ($X + $Y + $M + $N) . "<br>";
echo "The total product of all the values is: " . ($X * $Y * $M * $N) . "<br>";

//
function calculator($X, $Y, $operation) {
    switch ($operation) {
        case '+':
            return $X + $Y;
        case '-':
            return $X - $Y;
        case '*':
            return $X * $Y;
        case '/':
            if ($Y != 0) {
                return $X / $Y;
            } else {
                return "Division by zero error";
            }
    }
}

calculator(7,3.4, '/');
echo "The result of the calculator function is: " . calculator(7, 3.4, '/') . "<br>"; 
?>
