<?php
const nl = "\n";

$telefoonnummers = ['Mickey Mouse' => '038-4699776', 'Guus Geluk' =>
'0578-121212','Donald Duck'=>'010-2311512'];

foreach ($telefoonnummers as $naam => $nummer) {
    echo $naam . ' ' . $nummer . nl;
}

echo 'Wie krijgt er een nieuw nummer?' . nl;
$select_naam = trim(fgets(STDIN));

if (array_key_exists($select_naam, $telefoonnummers)) {
    echo 'Wat is het nieuwe nummer?' . nl;

    $nieuw_nummer = trim(fgets(STDIN));

    echo 'Nieuwe gegevens: ' . nl;
    $telefoonnummers[$select_naam] = $nieuw_nummer;
    foreach ($telefoonnummers as $naam => $nummer) {
        echo $naam . ' ' . $nummer . nl;
    }
} else {
    echo 'Deze naam komt niet voor in onze database!';
}
