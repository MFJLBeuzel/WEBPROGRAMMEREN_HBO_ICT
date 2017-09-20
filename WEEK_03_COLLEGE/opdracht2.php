<?php
echo 'Geef een getal!';
$getal = trim(fgets(STDIN));

$i=0;
echo $i;
while ($i<=($getal-2)) {
    $i= $i +2;
    echo '-' . $i;
}
