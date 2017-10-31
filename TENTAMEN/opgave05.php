<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 5</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $voorstelling = 'avond';

        /* Begin uitwerking */
        $tickets = ['ochtend' => 50, 'middag' => 40, 'avond' => 35];

        echo $voorstelling . ': ' . $tickets[$voorstelling] . '<br />';
        $tickets[$voorstelling] = $tickets[$voorstelling] -1;
        echo $voorstelling . ': ' . $tickets[$voorstelling] . '<br />';

        ?>
    </body>
</html>
