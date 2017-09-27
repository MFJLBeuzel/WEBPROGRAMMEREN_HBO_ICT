<?php
$ondergrens =1;
$bovengrens =100;
$gevonden = false;
$gok = $ondergrens - 1;

while (!$gevonden) {
    $gok = round(($ondergrens+$bovengrens)/2);
    echo 'Bovengrens: ' . $bovengrens . ' Ondergrens: ' . $ondergrens . "\n"
    echo 'Is het getal: ' . $gok . 'j is ja, n is nee' . "\n";
    $antwoord = trim(fgets(STDIN));
    if ($antwoord == 'j') {
        $gevonden = true;
    } elseif ($antwoord == '1') {
        $bovengrens = $gok -1; {

        } elseif {
            $ondergrens =
        }
    }
}
//bijna af
