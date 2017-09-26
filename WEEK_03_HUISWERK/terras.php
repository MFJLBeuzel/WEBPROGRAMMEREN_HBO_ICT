<?php
const nl = "\n";
//associative array
$prijzen = ['cola' => 2.50,'koffie' => 2,'thee' => 1.75,'bier' => 2.25,
            'wijn' => 3.75,'water' => 0.50];

$max_prijs = max($prijzen);
$duurste_drank = array_search($max_prijs, $prijzen);

echo 'Het duurste drankje kost: ' . $max_prijs . nl .
'En het product is: ' . $duurste_drank . nl;

$avg_drank_prijs = array_sum($prijzen)/count($prijzen);
echo 'De gemiddelde drank prijs is: ' . $avg_drank_prijs . nl;

$prijzen['thee'] += 0.1;
echo 'Thee kost vanaf nu ' . $prijzen['thee']. nl;

$bestelling1 = ['cola','bier','cola', 'wijn','water','koffie','koffie','koffie'];

echo 'De bestelling is: ' . nl;
foreach ($bestelling1 as $bestel) {
    echo $bestel . nl;
}

$kosten = 0;
foreach ($bestelling1 as $drankje) {
    $kosten += $prijzen[$drankje];
}
echo 'Deze bestelling kost: ' . $kosten .  nl;

//i
$bestelling2 = ['cola' => 2,'bier' => 1,'wijn' => 1,'water' => 1,'koffie' => 3];
