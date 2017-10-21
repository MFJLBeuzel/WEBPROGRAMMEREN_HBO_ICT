<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <title>Opgave 12</title>
    </head>
    <body>
        <h1>Opgave 12</h1>
        <form action="opgave12_antw.php">
            Hoe vaak wil je met twee dobbelstenen gooien?&nbsp<input type="text" name="aantal">
            <br><input type="submit" value="Verzenden">
        </form><br>
        <?php
        /* Begin uitwerking */
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
