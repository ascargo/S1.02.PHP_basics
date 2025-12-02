<?php

declare(strict_types=1);

function gradeStudent(float $percentage): string
{
    if ($percentage >= 60) {
        return "First Class (1:1)";
    }
    if ($percentage >= 45) {
        return "Second Class (2:1)";
    }
    if ($percentage >= 33) {
        return "Third Class (3:1)";
    }
    return "You have failed the course";
}

echo gradeStudent(75) . "<br>";
echo gradeStudent(28) . "<br>";
echo gradeStudent(53) . "<br>";
echo gradeStudent(45) . "<br>";
echo gradeStudent(99) . "<br>";
