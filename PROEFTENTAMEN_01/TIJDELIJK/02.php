<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 2</title>
    </head>
    <body>
        <h1>Opgave 2</h1>
        <?php
        /* Gebruik onderstaande variabele in de uitwerking */
        $route = "Meppel Zwolle Amersfoort";

        /* Begin uitwerking */
        /*The str_replace() function replaces some characters with some other
        characters in a string.*/
        //The strtoupper() function converts a string to uppercase.
        $route = str_replace(' ', '-', $route);
        echo strtoupper($route);
        /* Einde uitwerking */
        ?>
    </body>
</html>
