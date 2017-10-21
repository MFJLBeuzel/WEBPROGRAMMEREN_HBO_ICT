<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <title>Opgave 12</title>
    </head>
    <body>
        <h1>Opgave 12</h1>
        <?php
        $aantal = 2;

        /* Begin uitwerking */
        print("<br><img src='3.jpg'> <img src='5.jpg'>");
        
        if (isset($_GET["aantal"])) {
            $aantal = $_GET["aantal"];

            for ($i = 1; $i <= $aantal; $i++) {
                $worp1 = rand(1, 6);
                $worp2 = rand(1, 6);
                print("<br>Worp " . $i . ": <img src='" . $worp1 . ".jpg'> <img src=\"" . $worp2 . ".jpg\">");
            }
        }
        /* Einde uitwerking */
        ?>
        <br>
    </body>
</html>
