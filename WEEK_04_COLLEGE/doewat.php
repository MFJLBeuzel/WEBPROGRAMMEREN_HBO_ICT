<?php
function doeWat($getal)
{
    $getal++;
    return $getal;
}

$getal = 12;
echo doeWat($getal) . "\n";

/*in de sheets wordt dit anders benaderd:

$getal = 12;
$getal = doeWat($getal);

print ($getal);*/
