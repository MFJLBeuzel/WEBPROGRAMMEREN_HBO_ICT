<?php
function printMail($naam, $dag, $isVerstuurd)
{
    if ($isVerstuurd == true) {
        echo 'Beste ' . $naam . ' je pakket is ' . $dag . ' verzonden. Vriendelijke groeten, Snelpakket.nl';
    } elseif ($dag == null) {
        echo 'Je pakket wordt vandaag verstuurd.';
    } else {
        echo 'Je packet wordt a.s. ' . $dag . ' verstuurd.';
    }
}

printMail('Lelijkerd', '', true);
