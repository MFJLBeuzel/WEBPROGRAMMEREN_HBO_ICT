<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 7</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $getal = 14;
        $deler = 7;

        /* Begin uitwerking */


        for ($i=0; $i % 2; $i++) {
            $som = $getal - $deler;
            echo $getal . '<br />min ' . $deler . ' is<br />' . $som . '<br />';
            $getal = $getal - $som;
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>
