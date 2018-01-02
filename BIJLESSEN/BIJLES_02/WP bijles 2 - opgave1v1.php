<?php

$start = 3;
$met0 = true;

// bepaal eerst tot waar er teruggeteld moet worden, 0 of 1?
$einde = 1;
if ($met0) {
    $einde = 0;
}

for ($x = $start; $x >= $einde; $x--) { // let op: hier staat >=
    print($x . "...<br>");
}

print("Liftoff!");
