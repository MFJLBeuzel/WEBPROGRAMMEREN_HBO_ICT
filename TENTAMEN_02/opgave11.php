<!DOCTYPE html>
<!--M.F.J.L. Beuzel s1123791-->
<html>
    <head>
        <title>Opgave 11</title>
    </head>
    <body>
        <h1>Dit is een voorbeeldtekst (h1 gebruikt)</h1>
        <form action="opgave11.php" method="post">
          Tekst: <input type="text" name="tekst" value="<?php echo $_POST["tekst"];?>"><br>
          Header: <input type="text" name="header" value="<?php echo $_POST["header"];?>"><br>
          <input type="submit" name="submit" value="Start">
        </form>

        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $tekst = "Nog een regel";
        $header = 4;

        if (($header > 6) || ($header < 1)) {
            echo 'Header moet tussen 1 en 6 liggen. Er wordt nu h1 gebruikt.</br>';
            echo '<h1>' . $tekst . '(h1 gebruikt)' . '</h1>';
        } else {
            echo "<h$header>$tekst(h$header gebruikt)</h$header>";
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>
