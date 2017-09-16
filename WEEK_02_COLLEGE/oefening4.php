<?php
$wachtwoord = trim(fgets(STDIN));

if ((strlen($wachtwoord)) < 8) {
    echo 'Te weinig tekens';
} else {
    echo 'Aantal karakters:' . (strlen($wachtwoord));
}
