<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Declare two int variables X and Y.
$X = 10; // Declare an integer variable
$Y = 4; // Declare another integer variable

// Declare a two float variables N and M.
$N = 1.23; // Declare a float variable
$M = 4.56; // Declare another float variable

// For X and Y, print the following operations on the screen:
echo $X ."<br>"; //the value of X
echo $Y ."<br>"; //the value of Y
echo "The sum of X and Y is: " . ($X + $Y) . "<br>"; // Sum of X and Y
echo "The difference of X and Y is: " . ($X - $Y) . "<br>"; // Difference of X and Y
echo "The product of X and Y is: " . ($X * $Y) . "<br>"; // Product of X and Y
echo "The modulus (remainder of the division) of X and Y is: " . ($X % $Y) . "<br>"; // Modulus of X and Y

// For M and N, print the following operations on the screen:
echo $M ."<br>"; //the value of M
echo $N ."<br>"; //the value of N
echo "The sum of M and N is: " . ($M + $N) . "<br>"; // Sum of M and N
echo "The difference of M and N is: " . ($M - $N) . "<br>"; // Difference of M and N
echo "The product of M and N is: " . ($M * $N) . "<br>"; // Product of M and N
echo "the modulus of M and N is: " . fmod($M, $N) . "<br>"; // Modulus of M and N. With float values, we use fmod() for modulus operation.

// for all the values, print the following operations on the screen:
echo "The double of " . $X . " is: " . ($X * 2) . "<br>"; // Double of X
echo "The double of " . $Y . " is: " . ($Y * 2) . "<br>"; // Double of Y
echo "The double of " . $M . " is: " . ($M * 2) . "<br>"; // Double of M
echo "The double of " . $N . " is: " . ($N * 2) . "<br>"; // Double of N
echo "The total sum of all the values is: " . ($X + $Y + $M + $N) . "<br>"; // Total sum of all values
echo "The total product of all the values is: " . ($X * $Y * $M * $N) . "<br>"; // Total product of all values

//
function calculator($X, $Y, $operation) {
    switch ($operation) {
        case '+':
            return $X + $Y; // Return the sum of X and Y
        case '-':
            return $X - $Y; // Return the difference of X and Y
        case '*':
            return $X * $Y; // Return the product of X and Y
        case '/':
            if ($Y != 0) {
                return $X / $Y; // Return the division of X by Y if Y is not zero
            } else {
                return "Division by zero error"; // Handle division by zero
            }
    }
}

calculator(7,3.4, '/'); // Call the calculator function with example values
echo "The result of the calculator function is: " . calculator(7, 3.4, '/') . "<br>"; // Display the result of the calculator function
?>