<?php
const nl = "\n";
$rondetijden = [5,5,6,6,7];
$aantalronden = count($rondetijden);
$totaal = array_sum($rondetijden);
//$opgeteldewaarden = array_count_values($rondetijden) --->omslachtig;
//$opgeteldewaardensamen = count($opgeteldewaarden);
$snelst = min($rondetijden);
$langzaamst = max($rondetijden);
echo 'ronde 1:' . $rondetijden[0] . ' minuten' . nl;
echo 'ronde 2:' . $rondetijden[1] . ' minuten' . nl;
echo 'ronde 3:' . $rondetijden[2] . ' minuten' . nl;
echo 'ronde 4:' . $rondetijden[3] . ' minuten' . nl;
echo 'ronde 5:' . $rondetijden[4] . ' minuten' . nl;
echo 'Aantal ronden: ' . $aantalronden . nl;
echo 'Totale tijd: ' . $totaal . ' minuten' . nl;
echo 'Snelste ronde!: ' . $snelst . ' minuten' . nl;
echo 'Langzaamste ronde: ' . $langzaamst . ' minuten :-(' . nl;
