<?php
//gegeven variabelen.
$uur = 7;
$weekdag = true;
$ongeval = false;

//bepalen wanneer er sprake is van een spits.
if ($weekdag && (($uur >= 6 && $uur < 9) || ($uur >= 16 && $uur < 19))) {
    $spits = true;
} else {
    $spits = false;
}

//weergeven van snelheid onder bepaalde voorwaarden.
if (!$ongeval && !$spits) {
    echo '120';
} elseif ($spits && !$ongeval) {
    echo '90';
} elseif ($ongeval && $spits) {
    echo '50';
} elseif ($ongeval && !$spits) {
    echo '90';
}
