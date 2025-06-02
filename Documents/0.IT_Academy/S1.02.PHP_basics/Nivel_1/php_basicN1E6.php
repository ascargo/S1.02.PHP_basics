<?php
function isBitten() {
    $random = rand(0,1); //randomly generate a number between 0 and 1
    if ($random == 1) {

        echo "Auch! 🐻 Charlie  has bitten you! 😵<br>"; // Return true if bitten
        return true;
    } else {
        echo "Uff! You are safe...  😮‍💨 for now!  <br>";
         return false; // Return false if not bitten
    }
}

isBitten();
?>