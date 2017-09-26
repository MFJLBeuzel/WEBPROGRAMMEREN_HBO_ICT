<?php
//overgenomen van antwoordenblad
const nl = "\n";

$startVermogen = 1000;
$rentePercentage = 4;

$eindVermogen = $startVermogen * 2;
$factor = 1 + ($rentePercentage/100);

echo 'Na hoeveel jaar is mijn vermogen verdubbeld met een bepaalde rente?' . nl;
echo 'Het startvermogen is ' . $startVermogen . nl;
echo 'Het rentepercentage is ' . $rentePercentage . nl;

$aantalJaar = 0;
while ($startVermogen < $eindVermogen) {
    $startVermogen *= $factor;
    $aantalJaar++;
}

echo 'Het eindvermogen is ' . $startVermogen . nl;
echo 'Het aantal jaren is ' . $aantalJaar . nl;
