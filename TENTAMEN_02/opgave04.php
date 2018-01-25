<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 4</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $huidigJaar = 2018;
        $bestemmingsJaar = 2018;

        /* Begin uitwerking */
        $som = $bestemmingsJaar - $huidigJaar;

        if (($som > 0) && ($som <= 10)) {
            echo $som . ' jaar in de toekomst';
        } elseif ($som == 0) {
            echo 'We blijven in ' . $huidigJaar;
        } elseif ($som > 10) {
            echo 'Maximum is 10 jaar';
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>
