<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 6</title>
    </head>
    <body>
        <h1>Opgave 6</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $lengtemetingen = [120,122,122,127];

        $som = 0;
        $aantal = 0;

        for ($i=0; $i < count($lengtemetingen); $i++) {
            $groei = $lengtemetingen[$i + 1] - $lengtemetingen[$i];

            if ($groei!=0) {
                $som += $groei;
                $aantal++;
                echo $groei . ' cm gegroeid' . '<br>';
            } else {
                echo 'niks gegroeid!';
            }
        }
        $gemiddeldeGroei = $som / $aantal;
        echo 'Gemiddelde groei: ' . $gemiddeldeGroei;

        /* Begin uitwerking */


        /* Einde uitwerking */
        ?>
    </body>
</html>
