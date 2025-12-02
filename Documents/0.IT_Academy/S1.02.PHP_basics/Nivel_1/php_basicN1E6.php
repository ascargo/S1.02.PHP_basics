<?php

declare(strict_types=1);

function isBitten(): bool
{
    $random = rand(0, 1);
    if ($random == 1) {

        echo "Auch! 🐻 Charlie  has bitten you! 😵<br>";
        return true;
    } else {
        echo "Uff! You are safe...  😮‍💨 for now!  <br>";
        return false;
    }
}

isBitten();
