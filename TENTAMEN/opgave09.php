<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <?php
        /* Begin uitwerking */
        function lokaal($gebouw, $verdieping, $lokaalnummer)
        {
            echo $gebouw . $verdieping . '.' . $lokaalnummer;
        }

        $lokaal = lokaal('T', 4, '09');
        /* Einde uitwerking */
        ?>
    </body>
</html>
