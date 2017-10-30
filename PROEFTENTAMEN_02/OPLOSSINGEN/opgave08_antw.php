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

        $prijs = 17;

        /* Begin uitwerking */

        print("U betaalt " . $prijs . " euro of:<br>");
        $i = 1;
        while ($prijs - 5 >= 0) {
            print($prijs - 5 . " euro + " . 100 * $i . " punten<br>");
            $i++;
            $prijs -= 5;
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>