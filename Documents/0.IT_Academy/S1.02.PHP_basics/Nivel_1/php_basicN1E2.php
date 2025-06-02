<?php
//Print the message "Hello World!" on the screen using a variable.
$message = "Hello World!";
echo $message . "<br>";

// Change all the characters to uppercase and print it on the screen.
$uppperMessage = ""; // Initialize an empty string for the uppercase message
for ($i=0; $i < strlen($message); $i++) { // Loop through each character in the message
    $message[$i] = strtoupper($message[$i]); // Convert the character to uppercase
    $uppperMessage .= $message[$i]; // Append the uppercase character to the new string
}
echo $uppperMessage . "<br>";
// Print on the screen the size(length) of the variable.
echo "The lenght of the message is: " . strlen($message) . "<br>";
// Print on the screen the string in reverse order.
$reversedMessage =""; // Initialize an empty string for the reversed message
for ($i = strlen($message) - 1; $i >= 0; $i--) { // Loop through the message in reverse order
    $reversedMessage .= $message[$i]; // Append each character to the reversed string
}
echo "The message read in reverse order is: " . $reversedMessage . "<br>";
// Create a new variable with the content "Aquest és el curs de PHP" and print on the screen the concatenation of both variables.
$message2="Aquest és el curs de PHP";
echo $message. " " .$message2;
?>