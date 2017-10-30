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

        $volwassenen = 2;
        $kinderen = 4;
        $hoogseizoen = true;

        /* Begin uitwerking */

        $prijsOvernachting = 10 + ($volwassenen * 5) + ($kinderen * 4);
        if ($volwassenen == 2 && $kinderen >= 2) {
            if ($hoogseizoen) {
                $prijsOvernachting = 30;
                print("familietarief (hoogseizoen) " . $prijsOvernachting . " euro");
            } else {
                $prijsOvernachting = 25;
                print("familietarief (laagseizoen) " .
                        $prijsOvernachting . " euro");
            }
        } else {
            if ($hoogseizoen) {
                $prijsOvernachting = $prijsOvernachting * 1.2;
                print($volwassenen . " + " . $kinderen . " 			  (hoogseizoen) " . $prijsOvernachting . " euro");
            } else {
                print($volwassenen . " + " . $kinderen . "
       (laagseizoen) " . $prijsOvernachting . " euro");
            }
        }
        /* Einde uitwerking */
        ?>
    </body>
</html>