<?php
declare(strict_types=1);

$message = "Hello World!";
echo $message . "<br>";

$upperMessage = strtoupper($message);
echo $upperMessage . "<br>";
echo "The length of the message is: " . strlen($message) . "<br>";
echo "The message read in reverse order is: " . strrev($message) . "<br>";
$message2 = "Aquest és el curs de PHP";
echo $message. " " .$message2;
