<?php

$start = 3;
$met0 = true;

// bepaal eerst tot waar er teruggeteld moet worden zoals in v2
$einde = 1;
if ($met0) {
    $einde = 0;
}
// hier wordt de waarde van $start steeds verlaagd,
// maar je kunt natuurlijk ook een extra variabele gebruiken zoals in v1 en v2
while ($start >= $einde) {
    print($start . "...<br>");
    $start--;
}

print("Liftoff!");
