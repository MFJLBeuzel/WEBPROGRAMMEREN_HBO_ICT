<?php

// stap 4 gaat verder op stap 3
$hoogte = 5;
for ($i = 1; $i <= $hoogte; $i++) {

    // spaties voor de sterretjes printen
    for ($k = $hoogte - $i; $k > 0; $k--) {
        echo '&nbsp';
    }
    // zelfde als in stap 1
    for ($j = 0; $j < (2 * $i) - 1; $j++) {
        echo '*';
    }
    echo '<br />';
}

// stap 4: schuif de stam op naar het midden. Hoe bepaal je het aantal spaties?
// bij $hoogte = 2 is het aantal spaties 0
// bij $hoogte = 3 is het aantal spaties 1
// bij $hoogte = 4 is het aantal spaties 2
// etc.
// Dus aantal spaties is $hoogte - 2

for ($i = 0; $i < $hoogte - 2; $i++) {
    echo '&nbsp';
}
echo '***<br />';
for ($i = 0; $i < $hoogte - 2; $i++) {
    echo '&nbsp';
}
echo '***<br />';

// hierboven zie je 2x precies hetzelfde, netter om het zo te doen?
/*
for ($j = 0; $j < 2; $j++) {
    for ($i = 0; $i < $hoogte - 2; $i++) {
        print " ";
    }
    print ("***\n");
}
*/
