<?php

// stap 3 gebruikt oplossing 1 van stap 2
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

// stap 3: print de stam
echo '***<br />';
echo '***<br />';
