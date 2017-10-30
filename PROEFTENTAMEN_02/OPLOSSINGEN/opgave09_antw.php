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

        function feliciteer($aantal) {
            print("Gefeliciteerd, je hebt je studie in " . (2016 - $aantal) . " jaar gehaald<br>");
        }

        feliciteer(2012);
        feliciteer(2013);

        /* Einde uitwerking */
        ?>
    </body>
</html>