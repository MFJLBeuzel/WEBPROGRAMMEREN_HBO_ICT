<?php
const BR = "\n";
$aantal = 0;

//KUT ONEINDIGE LOOP KIJK THUIS NAAR
while ($aantal < 10) {
    echo 'Het aantal is '. $aantal .  BR;
    $aantal = 0;
    for ($i=0; $i < $aantal; $i++) {
        echo '*' . BR;
    }
    $aantal++;
}
