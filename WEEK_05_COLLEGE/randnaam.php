<?php
function randNaam($namenlijst)
{
    return $namenlijst[array_rand($namenlijst)];
}

$namen = ['A','B','C','D'];

echo randNaam($namen);
