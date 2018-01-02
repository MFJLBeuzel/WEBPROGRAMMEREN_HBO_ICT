<?php
//KLOPT NIET!!!
$oudwachtwoord = 'welkom';
$nieuw1 = 'fiets';
$nieuw2 =  'fiets';

$lengteNieuwPW01 = strlen($nieuw1);
$lengteNieuwPW02 = strlen($nieuw2);

if ($nieuw1 != $nieuw2) {
  echo 'het nieuwe wachtwoord is niet 2x hetzelfde ingetypt!</br>';
} else {
  if ($lengteNieuwPW01 < 6 || $lengteNieuwPW02 < 6) {
      echo 'het nieuwe wachtwoord is te kort!</br>';
  }
  if (($nieuw1 == $oudwachtwoord) || ($nieuw2 == $oudwachtwoord)) {
      echo 'het nieuwe wachtwoord is hetzelfde als het oude wachtwoord!</br>';
  }
   else {
        echo 'Het WW is gewijzigd!</br>';
    }
}
 ?>
