<?php

/*
 * uitwerking zonder bestaande functies, met foreach
 */
$getallen = [2, 4, 7];

// kies een startwaarde voor $som en $aantal, in dit geval moeten ze beiden 0 zijn
$aantal = 0;
$som = 0;

// doorloop nu de array en tel elk getal daarin op bij $som,
// en tel elke keer 1 op bij $aantal
foreach ($getallen as $getal) {
    $som = $som + $getal;
    $aantal ++;
}

$gem = $som / $aantal;

echo 'De gemiddelde waarde is: ' . $gem;
