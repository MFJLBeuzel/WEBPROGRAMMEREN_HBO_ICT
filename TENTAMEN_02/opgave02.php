<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 2</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabele in de uitwerking */
        $naam = "JEROEN";

        /* Begin uitwerking */
        $naam1 = lcfirst($naam);
        $naam2 = strrev($naam1);
        $naam3 = lcfirst($naam2);
        echo $naam3;
        /* Einde uitwerking */
        ?>
    </body>
</html>
