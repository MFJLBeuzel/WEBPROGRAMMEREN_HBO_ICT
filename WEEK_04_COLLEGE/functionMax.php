<?php
function maxGetal($getal1, $getal2)
{
    if ($getal1 >= $getal2) {
        return $getal1;
    } else {
        return $getal2;
    }
}

$maximum = maxGetal(3, 7);
echo 'MAX:' . $maximum . "\n";

$getal = maxGetal(2, 4) + 1;
echo 'GETAL:' . $getal . "\n";
