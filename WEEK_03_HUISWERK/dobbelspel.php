<?php
//generate random number between 1 and 6
function roll()
{
    return rand(1, 6);
}
//generate random number between 1 and 6
function kaart()
{
    return rand (1, 52);
}

$aantalKaarten = roll();
$aantalPunten = 0;

if (roll() === 2||4||6) {
    echo 'De waarde van de kaart is: ' . kaart();
}
  
if (roll() === 1||3||5) {
    echo 'U heeft een oneven aantal punten op de dobbelsteen gekregen. Volgende
    speler!';
}

//$total_points = kaart() * $rondes;
//nog niet af
