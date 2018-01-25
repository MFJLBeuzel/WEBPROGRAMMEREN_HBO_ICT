<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <?php
        /* Begin uitwerking */
        function printOnderElkaar($tekst)
        {
            echo str_replace(' ', '<br />', $tekst);
        }

        printOnderElkaar('Dit is tekst');
        /* Einde uitwerking */
        ?>
    </body>
</html>
