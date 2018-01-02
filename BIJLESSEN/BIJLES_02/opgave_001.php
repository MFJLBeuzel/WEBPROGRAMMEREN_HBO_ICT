<?php
$start = 5;
$met0 = false;

//Begin at start and countdown to 1
for ($i=$start;$i>0;$i--) {
    echo $i . '...<br />';
}
//Determine if 0 has to be echoed
    if ($met0) {
        echo '0' . '...<br />';
    }
echo 'Liftoff!';
