<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 4</title>
    </head>
    <body>
        <h1>Opgave 4</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $prijsPerStuk = 3;
        $aantal = 30;
        $vasteKlant = true;

        $totaalprijs = $prijsPerStuk * $aantal;
        $verzendkosten = 0;

        /* Begin uitwerking */

        if ($vasteKlant) {
            $totaalprijs = $totaalprijs * 0.9;
        } else {
            if ($aantal >= 50) {
                $totaalprijs = $totaalprijs * 0.9;
            }
        }
        print("totaalprijs: " . $totaalprijs);

        if ($totaalprijs < 100) {
            $verzendkosten = $verzendkosten + $aantal * 0.05;
        }
        if ($verzendkosten == 0) {
            print("<br>verzending: gratis");
        } else {
            print("<br>verzending: " . $verzendkosten);
        }
        print("<br>totaal: " . ($totaalprijs + $verzendkosten));

        /* Einde uitwerking */
        ?>
    </body>
</html>