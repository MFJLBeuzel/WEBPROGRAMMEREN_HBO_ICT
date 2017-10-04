<?php
/*function optellen($a, $b)
{

    $som = $a + $b;
    return $som;
}

echo optellen(5, 5) . "\n";

function optellenBijStartwaarde($getal)
{
    global $startwaarde;
    $resultaat = $startwaarde + $getal;
    return $resultaat;
}

$startwaarde = 10;
echo optellenBijStartwaarde(20);

function tekenSterren()
{
    echo '*****' . "\n";
}

for ($i=0; $i < 10; $i++) {
    tekenSterren();
}

$i=10;
*/

function maxGetal($getal1, $getal2)
{
    if ($getal1 >= $getal2) {
        return $getal1;
    } else {
        return $getal2;
    }
}

$maximum = maxGetal(3, 7);
echo $maximum . "\n";

$getal = maxGetal(2, 4) + 1;
echo $getal . "\n";
