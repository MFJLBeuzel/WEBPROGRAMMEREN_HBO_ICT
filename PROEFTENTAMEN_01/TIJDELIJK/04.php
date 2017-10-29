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
        $aantal = 30;
        $vasteKlant = true;
        $korting = 0.9;
        $verzendkosten = 0.05 * $aantal;
        $totaalPrijs = $prijsPerStuk * $aantal;

        if ($vasteKlant || (!$vasteKlant && $aantal >= 50)) {
            $totaalPrijs = $totaalPrijs * $korting;
        }

        echo 'Totaalprijs: ' . $totaalPrijs . '<br>';

        if ($totaalPrijs < 100) {
            $verzendkosten = $verzendkosten + ($aantal * 0.05);
        } else {
            $verzendkosten = 0;
        }

        echo 'Totaal: ' . ($totaalPrijs + $verzendkosten) . '<br>';
        if ($verzendkosten == 0) {
            echo 'verzending: gratis' . '<br>';
        } else {
            echo 'verzending: ' . $verzendkosten . '<br>';
        }

        /* Einde uitwerking */
        ?>
    </body>
</html>
