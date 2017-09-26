<?php
//Kijk hier thuis naar. Loopt nog niet....
include 'functions.php';

$woord = 'parterretrap';
$zin = isPalindroom($woord);

if ($zin === $woord) {
    echo 'Het woord ' . $woord . 'is een palindroom!' . "\n";
} else {
    echo 'Het woord is ' . $woord . 'is geen palindroom!' . "\n";
}
