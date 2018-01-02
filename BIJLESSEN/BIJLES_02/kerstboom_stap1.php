<?php

// de kerstboom bestaat uit $hoogte rijen onder elkaar en daarna de stam
$hoogte = 5;

// oplossing 1: de breedte van een rij sterretjes is gelijk aan 2 keer $i  -1
// rij 1: breedte = (2*1) -1 = 1
// rij 2: breedte = (2*2) -1 = 3
// rij 3: breedte = (2*3) -1 = 5
// etc...
for ($i = 1; $i <= $hoogte; $i++) {
    // de breedte van een rij sterretjes is gelijk aan $i + $i-1
    for ($j = 0; $j < (2 * $i) - 1; $j++) {
        echo '*';
    }
    echo '<br />';
}

// oplossing 2: gebruik een extra variabele voor de breedte van de rij.
// de breedte begint bij 1, elke keer komt daar 2 bij
/*
$breedte = 1;
for ($i = 1; $i <= $hoogte; $i++) {
    for ($j = 0; $j < $breedte; $j++) {
        print("*");
    }
    print("\n");
    $breedte = $breedte + 2;
}
*/
