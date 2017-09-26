<?php
const nl = "\n";

$aantalKaarten = rand(1, 6);
$aantalPunten = 0;

while ($aantalKaarten % 2 == 0) {
    echo 'Het getrokken getal is ' . $aantalKaarten . nl;
    for ($i=0; $i < $aantalKaarten; $i++) {
        $kaart = rand(1, 52);
        echo 'De waarde van de kaart is ' . $kaart . nl;
        $aantalPunten += $kaart;
    }
    $aantalKaarten = rand(1, 6);
}
echo 'Het getrokken getal is ' . $aantalKaarten . nl;
echo 'Er zijn totaal ' . $aantalPunten . ' punten gescoord' . nl;
