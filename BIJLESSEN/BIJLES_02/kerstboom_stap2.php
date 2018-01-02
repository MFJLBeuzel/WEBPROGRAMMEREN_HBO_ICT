<?php

// stap 2 gebruikt oplossing 1 van stap 1, oplossing 2 (of je eigen oplossing) kan natuurlijk ook.
// In stap 2 wordt er voor de sterretjes steeds een aantal spaties geprint.
$hoogte = 5;

// oplossing 1:
// het aantal spaties op een rij kan je berekenen met $hoogte en $i. $i wordt steeds 1 groter dus die kan je gebruiken
// om van de hoogte af te halen. Het aantal spaties is gelijk aan $hoogte min $i.
for ($i = 1; $i <= $hoogte; $i++) {

    // spaties voor de sterretjes printen
    for ($k = $hoogte - $i; $k > 0; $k--) {
        echo '&nbsp';
    }
    // zelfde als in stap 1
    for ($j = 0; $j < (2 * $i) - 1; $j++) {
        echo '*';
    }
    echo '<br />';
}


// oplossing 2: extra variabele
// Het aantal spaties voor de eerste rij wordt eerst berekend, daarna gaat er in elke volgende rij
// 1 van af.
// Bijvoorbeeld: Als het aantal rijen 5 is, begint het aantal spaties met 4.
// De startwaarde voor $spaties is dus $hoogte -1
/*
$spaties = $hoogte - 1;
for ($i = 1; $i <= $hoogte; $i++) {

    // spaties voor de sterretjes printen
    for ($k = $spaties; $k > 0; $k--) {
        print (" ");
    }
    $spaties--;

    // zelfde als in stap 1
    for ($j = 0; $j < (2 * $i) - 1; $j++) {
        print("*");
    }
    print("\n");
}
*/
