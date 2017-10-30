<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 7</title>
    </head>
    <body>
        <h1>Opgave 7</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */

        $aantalWeken = 5;

        /* Begin uitwerking */

        for ($i = 1; $i <= $aantalWeken; $i++) {
            print(7 * $i . " dagen, aantal weken is " . $i . "<br>");
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>