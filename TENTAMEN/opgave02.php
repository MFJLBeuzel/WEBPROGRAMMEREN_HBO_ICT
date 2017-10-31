<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 2</title>
    </head>
    <body>
        <?php
        /* Gebruik onderstaande variabele in de uitwerking */
        $tekst1 = 'hallo';
        $tekst2 = 'dag';
        /* Begin uitwerking */
        $kortste = min(strlen($tekst1), strlen($tekst2));

        echo 'de kortste tekst heeft ' . $kortste . ' letters';
        /* Einde uitwerking */
        ?>
    </body>
</html>
