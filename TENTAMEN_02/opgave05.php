<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 5</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $d1 = 0;
        $d2 = 1;

        /* Begin uitwerking */
        $temperaturen = [0 => 22, 1 => 19, 2 =>24, 3 => 19, 4 => 27, 5 => 25, 6 => 24];

        $temperatuurverschil = $temperaturen[$d1] - $temperaturen[$d2];
        echo 'Het verschil tussen dag ' . $d1 . ' en dag ' . $d2 . ' is ' . $temperatuurverschil;
        /* Einde uitwerking */
        ?>
    </body>
</html>
