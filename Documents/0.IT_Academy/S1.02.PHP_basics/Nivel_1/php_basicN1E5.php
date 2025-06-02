<?php
function grading($percentageMark) {
    if ($percentageMark >=60) {
        echo "You have achieved a First Class (1:1) degree.<br>";
    } elseif ($percentageMark >=45) {
        echo "You have achieved a Second Class (2:1) degree.<br>";
    } elseif ($percentageMark >=33) {
        echo "You have achieved a Third Class (3:1) degree.<br>";
    } elseif ($percentageMark < 33) {
        echo "You have failed the course.<br>";
    } else {
        echo "Invalid percentage mark.<br>";
    }
}
grading(75);
grading(28);
grading(53);
grading(45);
grading(99);
?>