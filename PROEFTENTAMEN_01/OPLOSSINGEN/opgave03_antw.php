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
        $weekend = false;
        $afstand = 1;

        /* Begin uitwerking */

        if (!$weekend && $afstand > 10) {
            print("auto");
        } else {
            print("fiets");
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>