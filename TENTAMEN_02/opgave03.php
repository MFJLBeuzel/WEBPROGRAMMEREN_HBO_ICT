<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 3</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $uur = 4;
        $minuten = 0;

        /* Begin uitwerking */
        if ($minuten == 0) {
            echo $uur . ' uur';
        } elseif ($minuten == 15) {
            echo 'kwart over ' . $uur;
        } elseif ($minuten == 30) {
            echo 'half ' . ($uur + 1);
        } else {
            echo 'kwart voor ' . ($uur + 1);
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>
