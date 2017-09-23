<?php
const BR = "\n";
$rondetijden = array(5,5,6,6,7);
$aantalronden = count($rondetijden);
$opgeteldewaarden = array_count_values($rondetijden);
$opgeteldewaardensamen = count($opgeteldewaarden);

echo 'ronde 1:' . $rondetijden[0] . ' minuten' . BR;
echo 'ronde 2:' . $rondetijden[1] . ' minuten' . BR;
echo 'ronde 3:' . $rondetijden[2] . ' minuten' . BR;
echo 'ronde 4:' . $rondetijden[3] . ' minuten' . BR;
echo 'ronde 5:' . $rondetijden[4] . ' minuten' . BR;
echo 'Aantal ronden: ' . $aantalronden . BR;
echo 'Totale tijd: ' . $opgeteldewaardensamen . BR;
