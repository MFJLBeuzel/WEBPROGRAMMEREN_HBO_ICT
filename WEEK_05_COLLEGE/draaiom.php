<?php
function draaiom($lijstje)
{
    $reverse = array_reverse($lijstje);
    return $reverse;
}

$lijstje = [2,3,1,6];
$draaiom = draaiom($lijstje);

echo $draaiom;
