<?php
/*$naam = 'adje';
$naamHoofdletter = ucfirst($naam);

echo $naamHoofdletter;*/

function printCitaat($citaat)
{
    echo '--- ' . ucfirst($citaat) .' ---';
}

function printCitaat2($citaat, $auteur)
{
    echo '--- ' . ucfirst($citaat) . ': ' . ucfirst($auteur) . ' ---';
}

printCitaat('to be or not to be');
printCitaat2('lik toch mijn bolle billen!', 'unknown');
