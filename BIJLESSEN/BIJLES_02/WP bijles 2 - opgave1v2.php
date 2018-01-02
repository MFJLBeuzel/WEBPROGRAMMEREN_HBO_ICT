<?php

$start = 3;
$met0 = true;

// begin bij start en tel af t/m 1
for ($x = $start; $x > 0; $x--) {
    print($x . "...<br>");
}
// bepaal of 0 ook nog geprint moet worden
if ($met0) {
    print("0...");
}
print("Liftoff!");
