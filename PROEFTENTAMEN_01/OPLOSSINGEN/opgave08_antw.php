<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 8</title>
    </head>
    <body>
        <h1>Opgave 8</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $maximum = 288;
        $getal1 = 4;
        $getal2 = 6;

        /* Begin uitwerking */
        $getal3 = 0;
        print($getal1 . " " . $getal2 . " ");
        while ($getal3 <= $maximum) {
            $getal3 = $getal1 + $getal2;
            $getal1 = $getal2;
            $getal2 = $getal3;
            print($getal3 . " ");
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>