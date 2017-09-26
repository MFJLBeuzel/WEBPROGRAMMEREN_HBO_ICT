<?php
function tekenSterren($aantal)
{
    for ($i=0; $i < $aantal; $i++) {
        echo '*' . "\n";
    }
    echo "\n";
}

tekenSterren(8);
