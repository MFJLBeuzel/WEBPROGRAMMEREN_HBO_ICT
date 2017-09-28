<?php
function tekenSterren($aantal)
{
    for ($i=0; $i < $aantal; $i++) {
        echo '*' . "\n";
    }
    echo "\n";
}

tekenSterren(8);

//functie om score bij te houden
function updateScore($player,$points) {
  $score = $player->getScore();
  $player->setScore($score +$points);
}
