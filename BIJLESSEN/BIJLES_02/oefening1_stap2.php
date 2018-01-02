<?php

$a = 2;
$b = 3;
// stap 2: herhaal $a keer stap 1, elke keer met spaties er achter.

for ($j = 0; $j < $a; $j++) {

    // stap 1: print $b sterretjes achter elkaar
    for ($i = 0; $i < $b; $i++) {
        print ("*");
    }
    // einde stap 1
    // spaties
    print ("  ");
}