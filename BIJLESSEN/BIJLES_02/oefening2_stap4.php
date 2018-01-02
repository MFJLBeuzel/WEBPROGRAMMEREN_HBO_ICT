<?php

$nodig = 11;
// begin met een bedrag van 0, tel er bij elke fles het juiste bedrag bij op
$bedrag = 0;
while ($nodig > 0) {
    if ($nodig >= 3) {
        print "grote fles";
        $nodig = $nodig - 3;
        $bedrag = $bedrag + 5;
    } else {
        print "kleine fles";
        $nodig = $nodig - 1;
        $bedrag = $bedrag + 2;
    }
    if ($nodig > 0) {
        print ", nog nodig = " . $nodig;
    }
    print "\n";
}
print "totaal " . $bedrag . " euro";

