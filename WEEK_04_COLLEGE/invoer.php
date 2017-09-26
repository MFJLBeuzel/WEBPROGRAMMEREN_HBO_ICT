<?php
include 'functies.php';

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

$max = maxVan3($a, $b, $c);
$min = minVan3($a, $b, $c);

echo 'De max is ' . $max . "\n";
echo 'De min is ' . $min . "\n";
