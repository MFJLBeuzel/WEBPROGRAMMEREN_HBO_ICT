<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 7</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $afstand = 4;

        /* Begin uitwerking */

        echo $afstand . ' km te gaan<br />';

        for ($i=1; $i < 4; $i++) {
            echo $i . ' km gefietst, nog ' . ($afstand - $i) . ' te gaan<br />';
        }

        if ($afstand == $i) {
            echo '4 km gefietst';
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>
