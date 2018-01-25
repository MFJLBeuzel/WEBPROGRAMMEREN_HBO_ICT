<?php

/*
 * uitwerking met bestaande functies
 */
$getallen = [2, 4, 7];

$aantal = count($getallen);
$som = array_sum($getallen);

$gem = $som / $aantal;

echo 'De gemiddelde waarde: ' . $gem;
