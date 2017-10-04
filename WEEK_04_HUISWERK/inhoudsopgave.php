<?php
$hoofdstukken = [
 "Voorwoord" => 5,
 "Inleiding" => 7,
 "Expressionisme" => 9,
 "Surrealisme" => 29,
 "Kubisme" => 53,
 "Dada" => 66,
 "Futurisme" => 90,
 "Nieuwe zakelijkheid" => 99,
 "De Stijl" => 121,
 "Cobra" => 144,
 "Literatuur" => 158];

function printHoofdstuk($titel, $pagina)
{
    echo $titel . ' ' . $pagina . "\n";
}

foreach ($hoofdstukken as $titel => $pagina) {
    printHoofdstuk($titel, $pagina);
}
