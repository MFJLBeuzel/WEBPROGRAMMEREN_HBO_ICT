<?php

$a = 2;
$b = 3;

// stap 3: herhaal $b keer stap 2, elke keer met een nieuwe regel er achter
for ($k = 0; $k < $b; $k++) {
    // stap 2: herhaal $a keer stap 1, elke keer met spaties er achter
    for ($j = 0; $j < $a; $j++) {

        // stap 1: print $b sterretjes achter elkaar
        for ($i = 0; $i < $b; $i++) {
            print ("*");
        }
        // spaties
        print ("  ");
    }
    print("\n");
}
