<?php

$scoreThuis = 2;
$scoreUit = 1;
$aantalPuntenThuisteam = 20;
$aantalPuntenUitteam = 10;

$overwinning = 3;
$gelijkspel = 1;

if ($scoreThuis > $scoreUit) {
    $aantalPuntenThuisteam += $overwinning;
} elseif ($scoreUit > $scoreThuis) {
    $aantalPuntenUitteam += $overwinning;
} elseif ($scoreThuis == $scoreUit) {
    $aantalPuntenThuisteam += $gelijkspel;
    $aantalPuntenUitteam += $gelijkspel;
}

echo 'Aantal punten thuis: ' . $aantalPuntenThuisteam . '<br />';
echo 'Aantal punten uit: ' . $aantalPuntenUitteam . '<br />';
