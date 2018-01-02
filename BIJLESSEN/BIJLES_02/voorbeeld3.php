<?php

// deze uitwerking is vergelijkbaar met voorbeeld 2
// het verschil is de 2e actie die is toegevoegd

$aantal = 3;
for ($i = 1; $i <= $aantal; $i++) {

    // 1e actie: zelfde als in voorbeeld 2
    for ($s = 0; $s < $i; $s++) {
      echo '*';
    }
    // 2e actie: print de tekst achter de sterretjes
    echo  'dat is ' . $i;
    // zelfde als in voorbeeld 2: na het aantal sterretjes en de tekst nog een nieuwe regel
    echo '<br />';
}
?>
