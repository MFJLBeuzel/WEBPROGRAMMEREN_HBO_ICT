<?php

// deze uitwerking is vergelijkbaar met voorbeeld 3
// het verschil is de controle of de 3e actie uitgevoerd moet worden of niet

$aantal = 5;
for ($i = 1; $i <= $aantal; $i++) {

    for ($s = 0; $s < $i; $s++) {
        echo '*';
    }
    // controleer of het aantal geprint moet worden of niet
    // print bij elk even getal, controleer dat met de modulus functie %
    if ($i % 2 == 0) {
        echo 'dat is ' . $i;
    }
    echo '<br />';
}
?>
