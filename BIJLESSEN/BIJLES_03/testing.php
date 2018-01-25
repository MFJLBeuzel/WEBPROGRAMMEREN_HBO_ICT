<?php
/*
//FOREACH -> FOR(bij standaard index)
$namen = ['Henk', 'Piet'];

for ($i=0; $i < count($namen); $i++) {
    echo $i . ' ' . $namen[$i] . '<br />';
}
*/

/*
//BEPAAL OF EEN WAARDE VOORKOMT
$prijzen = [120,100,105,99,100];
$zoekwaarde = 100;

$gevonden = false;

foreach ($prijzen as $prijs) {
    if ($prijs == $zoekwaarde) {
        $gevonden = true;
    }
}

if ($gevonden) {
    echo $zoekwaarde . ' komt voor';
}
*/

/*
//BEPAAL AANTAL KEER DAT IETS VOORKOMT
$prijzen = [120,100,105,100,99,100];
$zoek = 100;

$aantal = 0;

foreach ($prijzen as $prijs) {
    if ($prijs == $zoek) {
        $aantal++;
    }
}

echo $zoek . ' komt ' . $aantal . ' keer voor';
*/

/*
//PRINT WAARDEN DIE AAN EEN EIS VOLDOEN
$prijzen = [120,100,105,99];
$goedkoopste = $prijzen[0];

foreach ($prijzen as $prijs) {
    if ($prijs < $goedkoopste) {
        $goedkoopste = $prijs;
    }
}

echo 'De goedkoopste kost ' . $goedkoopste;
*/

//CONTROLEER OP STEEDS HOGER
$prijzen = [120,100,105,99];

$stijgend = true;

for ($i=1; $i < count($prijzen) ; $i++) {
    if ($prijzen[$i] <= $prijzen[$i - 1]) {
        $stijgend = false;
    }
}

if ($stijgend) {
    echo 'Stijgende lijn!';
}
