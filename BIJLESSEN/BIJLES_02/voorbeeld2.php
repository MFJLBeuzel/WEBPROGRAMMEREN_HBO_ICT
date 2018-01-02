<?php

$aantal = 5;
// herhaal $aantal keer het printen van de sterretjes, het is handig om met 1 te beginnen
// omdat de waarde van $i dan ook het aantal sterretjes is
for ($i = 1; $i <= $aantal; $i++) {

    // print $i sterretjes, elke keer dus 1 meer dan de vorige keer
    for ($s = 0; $s < $i; $s++) {
        echo '*';
    }
    // na het aantal sterretjes nog een nieuwe regel
    echo '<br />';
}
?>
