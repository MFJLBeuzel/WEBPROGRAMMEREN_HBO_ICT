<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 2</title>
    </head>
    <body>
        <h1>Opgave 2</h1>
        <?php
        /* Gebruik onderstaande variabele in de uitwerking */

        $min = 1;
        $max = 5;

        /* Begin uitwerking */

        $antwoord = array_sum(range($min, $max));
        print($antwoord);

        /* Einde uitwerking */
        ?>
    </body>
</html>