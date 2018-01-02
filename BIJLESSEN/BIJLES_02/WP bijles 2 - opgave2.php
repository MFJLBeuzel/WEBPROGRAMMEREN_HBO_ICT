<?php

$aantalKinderen = 1;
$aantalRondjes = 2;

// extra variabelen voor bedrag per ronde en bonusronde, handig maar niet noodzakelijk;
$bedragPerRonde = $aantalKinderen * 1.5;
$bedragBonusronde = $bedragPerRonde + 5;

// twee variabelen om de de totaalstand bij te houden
$totaalbedrag = 0;
$aantalBonus = 0;

// handig om $i bij 1 te laten beginnen, dat controleert makkelijker of het
// een bonusronde is.
for ($i = 1; $i <= $aantalRondjes; $i++) {

    if ($i % 5 == 0) {
        $totaalbedrag = $totaalbedrag + $bedragBonusronde; // ipv $bedragBonusronde kun je hier ook de berekening van regel 8 gebruiken
        print("bonusronde " . $i . ": " . $bedragBonusronde);
        $aantalBonus = $aantalBonus + 1;
    } else {
        $totaalbedrag = $totaalbedrag + $bedragPerRonde; // ipv $bedragPerRonde kun je hier ook de berekening van regel 7 gebruiken
        print("ronde " . $i . ": " . $bedragPerRonde);
    }
    print(" euro, totaal " . $totaalbedrag . " euro<br>");
}
print("eindresultaat: " . $totaalbedrag . " euro (" . $aantalBonus . " x bonus)");
