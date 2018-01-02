<?php

$aantal1euromunten = 1;
$aantal2euromunten = 1;
$aantal50centmunten = 1;

$waarde1euro = 1;
$waarde2euro = 2;
$waarde50cent = 0.5;

$totaalbedrag = ($aantal1euromunten * $waarde1euro) + ($aantal2euromunten *
$waarde2euro) + ($aantal50centmunten * $waarde50cent);

if (($aantal1euromunten > $aantal2euromunten) && ($aantal1euromunten >
$aantal50centmunten)) {
    echo 'Je hebt de meeste 1euromunten' . '<br />';
} elseif (($aantal2euromunten > $aantal1euromunten) && ($aantal2euromunten >
$aantal50centmunten)) {
    echo 'Je hebt de meeste 2euromunten' . '<br />';
} elseif (($aantal50centmunten > $aantal1euromunten) && ($aantal50centmunten >
$aantal2euromunten)) {
    echo 'Je hebt de meeste 50centmunten' . '<br />';
} else {
    echo 'Je hebt van alle munten evenveel' . '<br />';
}

echo $totaalbedrag . '<br />';
