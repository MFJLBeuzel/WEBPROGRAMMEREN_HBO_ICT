<?php
const BR = "\n";

$temperaturen = array('Assen' => 14.6,'Maastricht' => 17.4,'Zwolle' => 18.5,
'Amsterdam' => 13.6);

$maximum = max($temperaturen);
echo 'De max temp is: ' . $maximum . ' ' . 'graden.' . BR;
$minimum = min($temperaturen);
echo 'De min temp is: ' . $minimum . ' ' . 'graden.' . BR;

$som_temperaturen = array_sum($temperaturen);
echo 'Som van alle temperaturen: ' . $som_temperaturen . '.' . BR;

$elementen_temperaturen = count($temperaturen);
echo 'Count van alle temperaturen: ' . $elementen_temperaturen . '.' . BR;

echo 'Het gemiddelde is: ' . array_sum($temperaturen) / count($temperaturen) . BR;

foreach ($temperaturen as $stad => $temp) {
    echo 'De temperatuur in ' . $stad . ' is ' . $temp . '.' . BR;
}
