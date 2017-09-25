<?php
//associative array
$prijzen = ['cola' => 2.50,'koffie' => 2,'thee' => 1.75,'bier' => 2.25,
            'wijn' => 3.75,'water' => 0.50];

$duurste_drank_prijs = max($prijzen);
$key_duurste_drank = array_search($duurste_drank_prijs, $prijzen);

echo 'Het duurste drankje kost: ' . $duurste_drank_prijs . "\n" .
'En het product is: ' . $key_duurste_drank . "\n";

$gemiddelde_drank_prijs = array_sum($prijzen)/count($prijzen);
echo 'De gemiddelde drank prijs is: ' . $gemiddelde_drank_prijs . "\n";

$bestelling = ['cola','bier','cola', 'wijn','water','koffie','koffie','koffie'];

echo 'De bestelling is: ' . "\n";
foreach ($bestelling as $bestel) {
    echo $bestel . "\n";
}
