<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 3</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $getal1 = 10;
        $getal2 = 7;
        $berekening = 'min';

        /* Begin uitwerking */
        $aftrekken = $getal1 - $getal2;
        $vermenigvuldigen = $getal1 * $getal2;

        if ($berekening == 'min') {
            echo $getal1 . ' min ' . $getal2 . ' is ' . $aftrekken;
        } elseif ($berekening == 'keer') {
            echo $getal1 . ' keer ' . $getal2 . ' is ' . $vermenigvuldigen;
        } else {
            echo 'onbekend';
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>
