<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 5</title>
    </head>
    <body>
        <h1>Opgave 5</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $maaltijd = 'ontbijt';

        /* Begin uitwerking */
        $reserveringen = ['ontbijt'=>10,'lunch'=>40,'diner'=>51];

        echo $maaltijd . ': ' . $reserveringen[$maaltijd] . '<br>';
        $reserveringen[$maaltijd] = $reserveringen[$maaltijd] + 1;

        echo $maaltijd . ': ' . $reserveringen[$maaltijd] . '<br>';
        
        /* Einde uitwerking */
        ?>
    </body>
</html>
