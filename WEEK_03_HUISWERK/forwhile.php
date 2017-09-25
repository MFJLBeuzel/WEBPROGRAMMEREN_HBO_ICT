<?php
//8 bij 8 sterretjes
/*
//number of lines we need to display
for ($row=1; $row <= 8; $row++) {
    //stars display on each line
    for ($col=1; $col <= 8; $col++) {
        echo '*';
    }
    echo "\n";
}
*/
//driehoek van 1 naar 8
for ($row=1; $row <= 8; $row++) {
    for ($col=1; $col < $row; $col++) {
        echo '*';
    }
    echo "\n";
}
