<?php
$leeftijd = 18;
$heeftRijbewijs = true;

if ($leeftijd < 16) {
    echo "Je mag geen voertuig besturen!";
} elseif ($leeftijd >= 18 && $heeftRijbewijs) {
    echo "Je mag autorijden!";
} else {
    echo "Je mag brommer rijden!";
}
