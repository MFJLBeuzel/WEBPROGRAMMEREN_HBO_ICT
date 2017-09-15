<?php
$leeftijd = 16;
$heeftRijbewijs = true;

if ($leeftijd >= 16 && $leeftijd <18) {
    echo "Je mag brommer rijden!";
} elseif ($leeftijd >= 18 && $heeftRijbewijs) {
    echo "Je mag auto rijden!";
} else {
    echo "Je mag geen voertuig besturen!";
}
