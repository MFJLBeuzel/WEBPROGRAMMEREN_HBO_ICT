<?php

$aantalKinderen = 4;
$aantalRondjes = 31;

$bedragPerRonde = $aantalKinderen * 1.5;
$bedragBonusronde = $bedragPerRonde + 5;

$totaalbedrag = 0;
$aantalBonus = 0;

for ($i = 1; $i <= $aantalRondjes; $i++) {
    if ($i % 5 == 0) {
        $totaalbedrag = $totaalbedrag + $bedragBonusronde;
        echo 'bonusronde ' . $i . ': ' . $bedragBonusronde;
        $aantalBonus = $aantalBonus + 1;
    } else {
        $totaalbedrag = $totaalbedrag + $bedragPerRonde;
        echo 'ronde ' . $i . ': ' . $bedragPerRonde;
    }
    echo ' euro, totaal ' . $totaalbedrag . ' euro<br />';
}
echo 'eindresultaat: ' . $totaalbedrag . ' euro (' . $aantalBonus . ' x bonus)';
