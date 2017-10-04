<?php
const BR = "\n";
function print_r_mooi($lijst)
{
    echo '|-----|-----|' . BR;
    echo '|Index|Waarde|' . BR;
    echo '|-----|-----|' . BR;

    foreach ($lijst as $key => $value) {
        echo . $key . '|' . $value . '|';
    }
}

$lijstje = [2,3,1,6];
echo $lijstje;
