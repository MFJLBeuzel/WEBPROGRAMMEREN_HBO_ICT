<?php
echo "username: ";
$gebruikersnaam = trim(fgets(STDIN));
echo "\npassword: ";
$wachtwoord = trim(fgets(STDIN));

if ($gebruikersnaam == "user") {
    if ($wachtwoord == "pass") {
        echo "Welkom!";
    } else {
        echo "Verboden voor onbevoegden!";
    }
} else {
    echo "Verboden voor onbevoegden!";
}
