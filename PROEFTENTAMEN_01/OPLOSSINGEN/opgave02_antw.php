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
        $route = "Meppel Zwolle Amersfoort";

        /* Begin uitwerking */

//        $route2 = str_replace(" ", "-", $route);
//        $route = strtoupper(str_replace(" ", "-", $route));
        print(strtoupper(str_replace(" ", "-", $route)));

        /* Einde uitwerking */
        ?>
    </body>
</html>