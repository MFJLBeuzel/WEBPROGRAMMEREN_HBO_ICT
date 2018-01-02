<?php

$aantal = 3;

echo 'plaatje 1:' . '<br />';
// plaatje 1: steeds meer
// hier is het handig om bij 1 te beginnen
for ($i = 1; $i <= $aantal; $i++) {
    echo $i . '<br />';
}

echo 'plaatje 2:' . '<br />';
// plaatje 2: steeds minder
for ($i = $aantal; $i > 0; $i--) {
    echo $i . '<br />';
}
?>
