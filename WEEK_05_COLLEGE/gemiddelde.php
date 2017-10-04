<?php
function gemiddelde($lijst)
{
    $aantal = count($lijst);
    $totaal = array_sum($lijst);
    return $totaal/$aantal;
}

$lijstje = [2,3,1,6];

echo gemiddelde($lijstje);
