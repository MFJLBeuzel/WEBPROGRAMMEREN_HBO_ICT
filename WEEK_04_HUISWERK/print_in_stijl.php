<?php
function printCitaat($citaat)
{
    echo '--- ' . $citaat .' ---';
}

function printCitaat2($citaat, $auteur)
{
    echo '--- ' . $citaat . ': ' . $auteur . ' ---';
}

printCitaat2('Lik toch mijn bolle reet!', 'Unknown');
