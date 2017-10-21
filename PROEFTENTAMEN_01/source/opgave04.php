<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 4</title>
    </head>
    <body>
        <h1>Opgave 4</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $prijsPerStuk = 2;
        $aantal = 60;
        $vasteKlant = false;

        $totaal = $prijsPerStuk * $aantal;

        /* Begin uitwerking */
        if ($vasteKlant) {
            echo 'Totaalprijs: ' . ($totaal * 0.9);
        } else {
            if ($aantal >= 50) {
                echo 'Totaalprijs: ' . ($totaal * 0.9);
            }
        }

        if ($totaalprijs < 100) {
          $verzendkosten = $verzendkosten + $aantal * 0.05;
        }
        if ($verzendkosten == 0) {
          echo 
        }


        /* Einde uitwerking */
        ?>
    </body>
</html>
