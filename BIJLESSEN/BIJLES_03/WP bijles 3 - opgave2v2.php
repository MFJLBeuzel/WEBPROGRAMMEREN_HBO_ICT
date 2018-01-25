<?php

// Omgekeerd is nu ook goed:
$krokodil = array("staart", "lijf", "kop");

// Variabele voor de laatste index van de krokodil
$laatste = count($krokodil) - 1;

// We gaan er eerst weer van uit dat de krokodil klopt:
$krokodilKlopt = true;

// Nu gaan we bepalen of begin en eind goed zijn.
// Het is nu voor de leesbaarheid van de volgende if/elseif-regels makkelijker om ervan uit te
// gaan de de kop en staart niet in orde zijn:
$kopStaartOk = false;

if ($krokodil[0] == "kop" && $krokodil[$laatste] == "staart") {
    $kopStaartOk = true;
} elseif ($krokodil[0] == "staart" && $krokodil[$laatste] == "kop") {
    $kopStaartOk = true;
}

// Als de kop en staart kloppen gaan we verder met de tussenliggende stukken.
// Net als in de vorige opgave gaan we er hier dan weer van uit dat de krokodil klopt,
// tot we een tussenstuk vinden dat niet klopt.
if ($kopStaartOk) {
    for ($i = 1; $i < $laatste; $i++) {
        if ($krokodil[$i] != "lijf") {
            $krokodilKlopt = false; // omdat een tussenstuk niet klopt
        }
    }
} else {
    $krokodilKlopt = false; // omdat de kop en staart niet kloppen
}



if ($krokodilKlopt) {
    print "de krokodil klopt";
} else {
    print "de krokodil klopt niet";
}

