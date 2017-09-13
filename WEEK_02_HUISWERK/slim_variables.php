<?php
$gerecht1 = "Pizza";
$gerecht2 = "Macaroni";
$gerecht3 = "Lasagna";

$uitbreiding = "groot";

$prijs1 = 8.50;
$prijs2 = 5.25;
$prijs3 = 5.95;

$groter = trim(fgets(STDIN));

$groot1 = $prijs1 * $groter;
$groot2 = $prijs2 * $groter;
$groot3 = $prijs3 * $groter;

echo  $gerecht1 . " " . $prijs1 . ", " . $uitbreiding . " " . $groot1;
echo "\n";
echo  $gerecht2 . " " . $prijs2 . ", " . $uitbreiding . " " . $groot2;
echo "\n";
echo  $gerecht3 . " " . $prijs3 . ", " . $uitbreiding . " " . $groot3;
echo "\n";
