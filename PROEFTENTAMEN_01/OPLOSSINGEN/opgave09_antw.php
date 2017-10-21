<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Opgave 9</title>
    </head>
    <body>
        <h1>Opgave 9</h1>
        <?php
        /* Begin uitwerking */

        function terugOfDoor($afgelegd, $totaleAfstand) {
            if ($afgelegd >= $totaleAfstand / 2) {
                print "nog " . ($totaleAfstand - $afgelegd) . " kilometer doorlopen";
            } else {
                print $afgelegd . " kilometer teruglopen";
            }
        }

        terugOfDoor(5, 11);

        /* Einde uitwerking */
        ?>
    </body>
</html>