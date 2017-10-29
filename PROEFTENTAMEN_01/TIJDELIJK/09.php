<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <h1>Opgave 9</h1>
        <?php
        /* Begin uitwerking */
        function terugOfDoor($aa, $ta)
        {
            if ($aa >= ($ta / 2)) {
                echo 'Nog ' . ($ta - $aa) . ' kilometer door lopen!';
            } else {
                echo 'Nog ' . $aa . ' kilometer terug lopen!';
            }
        }

        terugOfDoor(6, 10);

        /* Einde uitwerking */
        ?>
    </body>
</html>
