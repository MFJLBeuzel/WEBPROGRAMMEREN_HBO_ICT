<?php
const BR = "\n";
$rondetijden = array(7,7,8,11,15);

echo 'De rondetijden zijn: ' . BR;

foreach ($rondetijden as $ronde => $rondetijd) {
    echo 'Ronde ' . $ronde . ' heeft tijd: ' . $rondetijd . BR;
}
