<?php

$aantal = 4;
// van 1 t/m $aantal
for ($i = 1; $i <= $aantal; $i++) {
    // print $i sterretjes
    // in stap 1 werd hier alleen de waarde van $i geprint
    for ($s = 0; $s < $i; $s++) {
        echo '*';
    }
    echo '<br />';
}

// van $aantal-1 terug naar 1
for ($i = $aantal - 1; $i > 0; $i--) {
    // print $i sterretjes, PRECIES hetzelfde als hierboven
    for ($s = 0; $s < $i; $s++) {
        echo '*';
    }
    echo '<br />';
}
