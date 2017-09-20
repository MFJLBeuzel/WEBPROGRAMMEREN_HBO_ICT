 <?php
const BR = "\n";

$temperaturen = array('Assen' => 14.6,'Maastricht' => 17.4,'Zwolle' => 15.2,
'Amsterdam' => 15.6, 'Utrecht' => 15.4);
echo 'De temperatuur in Utrecht: ' . $temperaturen['Utrecht'] . BR;

//maak maastricht 1 graad warmer
$temperaturen["Maastricht"]= $temperaturen["Maastricht"] +1;

//max temp buiten Zwolle
$maximum = -273;

foreach ($temperaturen as $stad => $temp) {
    if ($temp > $maximum && $stad!='Zwolle') {
        $maximum = $temp;
    }
}
echo 'De max temperatuur buiten Zwolle: ' . $maximum . BR;
