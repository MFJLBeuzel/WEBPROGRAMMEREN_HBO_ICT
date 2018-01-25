<?php

$namen = array("a" => "an", "b" => "bob", "c" => "ferdy", "d" => "gio", "e" => "els");

// Het resultaat moet in een nieuwe array komen, deze kun je vast maken:
$resultaat = array();

// Doorloop nu de array $namen en bepaal bij elke naam of deze in $resultaat moet komen.
// Met een foreach krijg je op deze manier telkens de index als $letter en de waarde als $naam:
foreach ($namen as $letter => $naam) {

    // Stap 1: met de functie substr() kan je de eerste letter van de $naam krijgen
    // (zie http://php.net/manual/en/function.substr.php voor meer uitleg)
    $eersteLetterVanNaam = substr($naam, 0, 1); // neem een gedeelte van $naam te beginnen bij 0 en met een lengte van 1
    // Stap 2: Controleer of deze $eersteLetterVanNaam en $letter gelijk zijn aan elkaar:
    if ($eersteLetterVanNaam == $letter) {
        // Stap 3: voeg deze gegevens toe aan $resultaat, zet op index $letter de waarde $naam
        $resultaat[$letter] = $naam;
    }
}

// controleer je resultaat:
print_r($resultaat);

