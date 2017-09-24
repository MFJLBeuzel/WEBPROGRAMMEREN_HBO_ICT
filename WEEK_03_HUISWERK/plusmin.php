<?php
const nl = "\n";

$nummers = [1, 8, 12, 7, 14, -13, 8, 1, -1, 14, 7];
//echo werkt niet voor de gewenste info. Oplossing: interne functie print_r();
print_r($nummers);

$grootste = max($nummers);
echo $grootste . nl;

$samen = array_sum($nummers);
echo $samen . nl;

//zelfde uitkomst als met array_sum(); maar nu met foreach
$som = 0;
foreach ($nummers as $nummer) {
    $som += $nummer;
}

echo $som . nl;
