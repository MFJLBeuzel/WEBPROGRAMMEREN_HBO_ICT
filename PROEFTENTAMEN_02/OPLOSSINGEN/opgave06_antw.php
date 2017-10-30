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
        $instrument = "viool";
        $muzikanten = array();
        $muzikanten["Piet"] = "viool";
        $muzikanten["Johanna"] = "piano";
        $muzikanten["Hilly"] = "viool";
        $muzikanten["Rachel"] = "blokfluit";
        $muzikanten["Tamara"] = "harp";
        $muzikanten["Hassan"] = "klarinet";

        $aantal = 0;
        foreach ($muzikanten as $key => $value) {
            if ($value == $instrument) {
                print($key . " ");
                $aantal++;
            }
        }

        if ($aantal != 0) {
            print("(" . $aantal . ")");
        } else {
            print("niemand speelt $instrument");
        }
        ?>
    </body>
</html>
