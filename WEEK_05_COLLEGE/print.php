<?php
const BR = '<br>';
function print_r_mooi($lijst)
{
    echo '|-----|-----|' . BR;
    echo '|Index|Waarde|' . BR;
    echo '|-----|-----|' . BR;

    foreach ($lijst as $key => $value) {
        echo '|' . $key . ' ' . '|' . $value . '|' . BR;
        echo '|------|------|' . BR;
    }
}

$lijstje = [2,3,1,6];
print_r_mooi($lijstje);
