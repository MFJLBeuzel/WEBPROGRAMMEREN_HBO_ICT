<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 3</title>
    </head>
    <body>
        <h1>Opgave 3</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $minimum = 3;
        $maximum = 5;
        $aantalPersonen = 7;

        /* Begin uitwerking */

        if ($aantalPersonen >= $minimum && $aantalPersonen <= $maximum) {
            print($aantalPersonen . " personen kunnen samen in een groep");
        } else {
            print($aantalPersonen . " personen komt niet goed uit");
        }


        /* Einde uitwerking */
        ?>
    </body>
</html>