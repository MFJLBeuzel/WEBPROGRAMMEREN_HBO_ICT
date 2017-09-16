<?php
/*
if ($gebruikersnaam == "user") {
    if ($wachtwoord == "pass") {
        echo "Welkom!";
    } else {
        echo "Verboden voor onbevoegden!";
    }
} else {
    echo "Verboden voor onbevoegden!";
}
*/
$gebruikersnaam = trim(fgets(STDIN));
$wachtwoord = trim(fgets(STDIN));

if (($gebruikersnaam == 'user') && ($wachtwoord == 'pass')) {
    echo 'Welkom' . ' ' . $gebruikersnaam . '!';
} else {
    echo 'Verboden voor onbevoegden!';
}
