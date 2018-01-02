<?php
$groep = 5;
$chauffeur = false;

if ($chauffeur) {
    $groep++; // 1 extra plaats nodig voor de chauffeur
}

if ($groep <= 6) {
    echo 'kleine bus';
    if ($groep < 6) {
        $verschil = 6 - $groep;
        echo ', lege plaatsen: ' . $verschil;
    }
} elseif ($groep <= 20) {
    echo 'middelgrote bus';
    if ($groep < 20) {
        $verschil = 20 - $groep;
        echo ', lege plaatsen: ' . $verschil;
    }
} elseif ($groep <= 40) {
    echo 'grote bus';
    if ($groep < 40) {
        $verschil = 40 - $groep;
        echo ', lege plaatsen: ' . $verschil;
    }
} else {
    echo 'bel ons voor een offerte';
}
