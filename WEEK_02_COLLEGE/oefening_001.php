<?php
$leeftijd = 18;
$heeftRijbewijs = true;

if ($leeftijd >= 16) {
    echo 'Je mag brommer rijden';
    if ($leeftijd >= 18 && $heeftRijbewijs) {
        echo 'Je mag auto rijden';
    }
} else {
    echo 'Je mag geen voertuig besturen';
}
