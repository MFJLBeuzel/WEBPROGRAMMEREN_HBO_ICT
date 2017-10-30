<!DOCTYPE html>
<!--[Vul hier je naam en studentnummer in]-->
<html>
    <head>
        <style>
            .zwart{background-color: black;
                   color: white;}
            td{border: solid black;}
        </style>
        <title>Opgave 12</title>
    </head>
    <body>
        <h1>Opgave 12</h1>

        <form action = "opgave12_antw.php">
            Hoeveel rijen wil je zien?&nbsp<input type = "text" name = "aantal">
            <br><input type = "submit" value = "Verzenden">
        </form><br>
        <?php
        /* Begin uitwerking */
        if (isset($_GET["aantal"])) {
            $aantal = $_GET["aantal"];

            print("<table>");
            for ($i = 0; $i < $aantal; $i++) {
                print("<tr>");
                if ($i % 2 == 0) {
                    print("<td class='zwart'>X</td><td>X</td>");
                } else {
                    print("<td>X</td><td class='zwart'>X</td>");
                }
                print("</tr>");
            }
            print("</table>");
        }

        /* Einde uitwerking */
        ?>
        <br>
    </body>
</html>
