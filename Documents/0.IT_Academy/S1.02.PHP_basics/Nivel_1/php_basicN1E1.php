<?php
declare(strict_types=1);

$age = 42;
$height = 1.62;
$string = "Student's data information";
$student = true;

define("name", "Asier");

echo "<h1>" . name . "</h1>";

echo $string . "<br>";
echo "Is this person a current student? " . ($student ? 'Yes' : 'No') . "<br>";
echo "Age: " .$age . "<br>";
echo "Height: " .$height . "<br>";
