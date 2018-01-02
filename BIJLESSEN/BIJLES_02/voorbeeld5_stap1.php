<?php

$aantal = 4;
// van 1 t/m $aantal
for ($i = 1; $i <= $aantal; $i++) {

    // de actie bestaat hier alleen uit het printen van $i en de "\n"
    // $i en "\n" worden apart geprint omdat dat in stap 2 van pas komt
    // in stap 2 wordt print($i) vervangen door het for-blok waarmee $i sterretjes worden geprint
    echo $i;
    echo '<br />';
}

// van $aantal-1 terug naar 1, verder het zelfde als hier boven
for ($i = $aantal - 1; $i > 0; $i--) {
    echo $i;
    echo '<br />';
}
