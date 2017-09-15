<?php
$scoreThuis = 10;
$scoreUit = 10;
$aantalPuntenThuisteam = 0;
$aantalPuntenUitteam = 0;

$overwinningThuisTeam = $scoreThuis > $scoreUit;
$overwinningUitTeam = $scoreThuis < $scoreUit;

//HAHA lelijk!
if ($overwinningThuisTeam) {
    echo "Thuisteam heeft gewonnen! Thuisteam ontvangt " . ($aantalPuntenThuisteam + 3)
    . " punten.";
} elseif ($overwinningUitTeam) {
    echo "Uitteam heeft gewonnen! Uitteam ontvangt " . ($aantalPuntenUitteam + 3)
    . " punten.";
} else {
    echo "Er is gelijkgespeeld. Thuisteam ontvangt " . ($aantalPuntenThuisteam + 1)
    . " punt." . " " . "Uitteam ontvangt " . ($aantalPuntenUitteam + 1) . " punt.";
}
