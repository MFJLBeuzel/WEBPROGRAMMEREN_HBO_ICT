<?php
$klassenlijst = ["tobias", "hasna", "aukje", "fred",
"sep", "koen", "wahed", "anna", "jackie", "rashida",
"winston", "sammy", "manon", "ben", "karim", "bart",
"lisa"];

//eenmalig tom toegevoegd
$klassenlijst[17] = "Tom";
//aantal leerlingen
$aantal = count($klassenlijst);

foreach ($klassenlijst as $klas => $value) {
    echo 'Nr.' . ($klas + 1) . ' leerling = ' . ucfirst($value);
    echo "\n";
}

echo 'Aantal leerlingen: ' . $aantal . "\n";
