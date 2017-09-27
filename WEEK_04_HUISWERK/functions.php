<?php
function optellen($a, $b)
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
