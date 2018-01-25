<?php

$krokodil = array("kop", "lijf", "staart");


// Aanpak: ga ervan uit dat de krokodil klopt:
$krokodilKlopt = true;
// Kijk nu stap voor stap of dat ook zo is.
//
// Eerst nog even de laatse index van de krokodil bepalen
$laatste = count($krokodil) - 1;

// Controleer de eerste, als dit geen kop is klopt de krokodil niet en ben je klaar
if ($krokodil[0] != "kop") {
    $krokodilKlopt = false;
}
// Als de kop klopt, controleer dan de laatste, dit moet een staart zijn
elseif ($krokodil[$laatste] != "staart") {
    $krokodilKlopt = false;
}
// Als de staart ook klopt controleer dan tot slot nog de tussenliggende delen
else {
    for ($i = 1; $i < $laatste; $i++) {
        if ($krokodil[$i] != "lijf") {
            $krokodilKlopt = false; // omdat een tussenstuk niet klopt
        }
    }
}

if ($krokodilKlopt) {
    print "de krokodil klopt";
} else {
    print "de krokodil klopt niet";
}

