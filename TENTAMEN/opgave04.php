<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 4</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $land1 = "Frankrijk";
        $land2 = "Spanje";
        $land3 = "Portugal";

        /* Begin uitwerking */
        $vergelijking = strcmp($land1, $land2);
        $vergelijking2 = strcmp($land2, $land3);
        $vergelijking3 = strcmp($land1, $land3);

        if ($vergelijking && $vergelijking2 && $vergelijking3) {
            echo '3x ' . $land1;
        } else {
            echo 'verschillend';
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>
