<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Opgave 6</title>
    </head>
    <body>
        <h1>Opgave 6</h1>
        <?php
        $lengtemetingen = array(120, 122, 122, 127);

        $som = 0;
        $aantal = 0;
        for ($i = 0; $i < count($lengtemetingen) - 1; $i++) {
            $groei = $lengtemetingen[$i + 1] - $lengtemetingen[$i];

            if ($groei != 0) {
                $som += $groei;
                $aantal++;
                print ($groei . " cm gegroeid<br>");
            } else {
                print ("0 cm gegroeid X<br>");
            }
        }
        $gemiddeldeGroei = $som / $aantal;
        print ("Gemiddelde groei: " . $gemiddeldeGroei);
        ?>
    </body>
</html>
