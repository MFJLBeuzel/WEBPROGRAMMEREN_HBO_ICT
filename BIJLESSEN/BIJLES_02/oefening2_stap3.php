<?php

$nodig = 11;

while ($nodig > 0) {

    // probeer steeds eerst of er nog een grote fles bij kan, anders een kleine
    if ($nodig >= 3) {
        print "grote fles";
        $nodig = $nodig - 3;
    } else {
        print "kleine fles";
        $nodig = $nodig - 1;
    }
    if ($nodig > 0) {
        print ", nog nodig = " . $nodig;
    }

    print "\n";
}

