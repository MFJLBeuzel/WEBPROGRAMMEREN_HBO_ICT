<?php
const BR = "\n";
$klassenlijst = array("tobias", "hasna", "aukje", "fred");
//made a mistake, used asort():results in keeping index and name matched.
sort($klassenlijst);
print_r($klassenlijst);

echo '0:' . $klassenlijst[0] . BR;
echo '1:' . $klassenlijst[1] . BR;
echo '2:' . $klassenlijst[2] . BR;
echo '3:' . $klassenlijst[3] . BR;
