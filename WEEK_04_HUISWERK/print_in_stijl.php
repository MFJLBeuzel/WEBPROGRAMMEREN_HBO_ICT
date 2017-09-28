<?php
function printCitaat($citaat)
{
    echo '--- ' . $citaat .' ---';
}

function printCitaat2($citaat, $auteur)
{
    echo '--- ' . $citaat . ': ' . $auteur . ' ---';
}

//printCitaat('To be or not to be');
printCitaat2('Lik toch mijn bolle billen!', 'Unknown');
