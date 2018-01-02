<?php
//nog niet af!!!Je maakt het jezelf te moeilijk. Misschien wel netter. Who cares?
$groep = 10;
$chauffeur = true;

if ($chauffeur) {
  $groep++; //extra plaats nodig voor chauffeur
}

$kleineBus = 6;
$middelgroteBus = 20;
$groteBus = 40;

//berekenen van lege plaatsen
if (!$chauffeur) {
  $legePlaatsen = ($kleineBus - $groep) || ($middelgroteBus - $groep) || ($groteBus - $groep);
} else {
  $legePlaatsen = (($kleineBus - $groep) || ($middelgroteBus - $groep) || ($groteBus - $groep)) - 1;
}

if ($groep <= 6) {
  echo 'kleine bus' . ', lege plaatsen:' . $legePlaatsen;
} elseif ($groep <= 20) {
  echo 'middelgrote bus' . ', lege plaatsen:' . $legePlaatsen;
} elseif ($groep <= 40) {
  echo 'grote bus' . ', lege plaatsen:' . $legePlaatsen;
} elseif ($groep > 40) {
  echo 'bel voor een offerte!';
}
