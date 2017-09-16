<?php
const BR = "\n";

$aantal1euromunten = trim(fgets(STDIN));
$aantal2euromunten = trim(fgets(STDIN));
$aantal50centenmunten = trim(fgets(STDIN));

$waarde_1euromunten = 1;
$waarde_2euromunten = 2;
$waarde_50centmunten = 0.5;

$totaalbedrag = (($aantal1euromunten * $waarde_1euromunten) +
($aantal2euromunten * $waarde_2euromunten) +
($aantal50centenmunten * $waarde_50centmunten));

if (($aantal1euromunten > $aantal2euromunten) &&
  ($aantal1euromunten > $aantal50centenmunten)) {
    echo 'Je hebt de meeste 1euromunten.' . BR;
} elseif (($aantal2euromunten > $aantal1euromunten) &&
  ($aantal2euromunten > $aantal50centenmunten)) {
    echo 'Je hebt de meeste 2euromunten.'. BR;
} elseif (($aantal50centenmunten > $aantal1euromunten) &&
  ($aantal50centenmunten > $aantal2euromunten)) {
    echo 'Je hebt de meeste 50centenmunten.'. BR;
} else {
    echo 'Je hebt van alle munten evenveel!' . BR;
}

echo 'Het totaalbedrag is' . ' ' . $totaalbedrag . ' ' . 'euro.';

/*
const BR = "\n";
$firstname = 'LUT';
$surname = 'SER';
echo 'My name is' . $firstname . ' ' . $surname . '.' . BR .
'I am a master of none. "FY!"';
*/
