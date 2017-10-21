<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 3</title>
    </head>
    <body>
        <h1>Opgave 3</h1>
        <?php
        /* Gebruik onderstaande variabelen in de uitwerking */
        $weekend = false;
        $afstand = 5;

        /* Begin uitwerking */
        if ($weekend) {
            echo 'Fiets';
        } else {
          if($afstand <= 10) {
            echo 'Fiets';
          } else {
            echo 'Auto';
          }


        /* Einde uitwerking */
        ?>
    </body>
</html>
