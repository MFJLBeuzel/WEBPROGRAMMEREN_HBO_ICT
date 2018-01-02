<?php
$oudwachtwoord = 'hallo';
$nieuw1 = 'hallo';
$nieuw2 =  'hallo';

$lengteNieuwPW01 = strlen($nieuw1);
$lengteNieuwPW02 = strlen($nieuw2);

if ($nieuw1 != $nieuw2) {
  echo 'het nieuwe wachtwoord is niet 2x hetzelfde ingetypt!</br>';
} else {
    if ((($nieuw1 != $oudwachtwoord) && ($nieuw2 != $oudwachtwoord)) &&
    (($lengteNieuwPW01 >= 6 || $lengteNieuwPW02 >= 6))) {
      echo 'Het WW is gewijzigd!</br>';
} else {
    if ($lengteNieuwPW01 < 6 || $lengteNieuwPW02 < 6) {
      echo 'het nieuwe wachtwoord is te kort!</br>';
  }
    if (($nieuw1 == $oudwachtwoord) || ($nieuw2 == $oudwachtwoord)) {
      echo 'het nieuwe wachtwoord is hetzelfde als het oude wachtwoord!</br>';
    }
  }
}
 ?>
