<?php
echo "Wat is het eerste getal?\n";
$getal1 = trim(fgets(STDIN));
echo "Wat is het tweede getal?\n";
$getal2 = trim(fgets(STDIN));

$resultaat = $getal1 - $getal2;

if ($resultaat > 0) {
    echo "getal1 is groter dan getal2";
} else {
    echo "getal1 is niet groter dan getal2";
}
