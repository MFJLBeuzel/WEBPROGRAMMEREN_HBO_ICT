<?php
function draaiom($lijst)
{
    $reverse = array_reverse($lijst);
    return $reverse;
}

$lijstje = [2,3,1,6];
$draaiom = draaiom($lijstje);

print_r  ($draaiom);
