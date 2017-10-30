<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <title>Opgave 12</title>
    </head>
    <body>
        <h1>Opgave 12</h1>
        <form action="opgave12.php" method="post">
          Hoe vaak wil je met twee dobbelstenen gooien?
        <input type="text" name="aantal"><br>
        <input type="submit" value="verzenden"><br>
        </form>
        <?php
        if (isset($_POST["aantal"])) {
            $aantal = $_POST["aantal"];

            for ($i=1; $i <= $aantal; $i++) {
                $worp1 = rand(1, 6);
                $worp2 = rand(1, 6);
                echo 'Worp: ' . $i . ': <img src="' . $worp1
                . '.jpg"> <img src="' . $worp2 . '".jpg\><br><br>';
            }
        }

        ?>
        <br>
    </body>
</html>
