<?php
//aq.vanderploeg@windesheim.nl

function bepaalHumeur($aantal, $gebied)
{
    $markis = 'blij';
    if ($aantal < 3) {
        $markis = 'boos';
    }
    if ($aantal >= 3 || $aantal <= 5) {
        $markis = 'humeurig';
    }
    if ($gebied == 'zorg') {
        $markis = 'boos';
    }
    if ($gebied == 'onderwijs') {
        $markis = 'verdrietig';
    }

    return $markis;
}

echo 'Mark is ' . bepaalHumeur(2, 'zorg');
