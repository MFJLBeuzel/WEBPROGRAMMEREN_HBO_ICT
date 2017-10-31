<!DOCTYPE html>
<!-- Maarten Beuzel s1123791 -->
<html>
    <head>
        <style>
            div{width: 200px;}
        </style>
        <title>Opgave 11</title>
    </head>
    <body>

        <!--Begin uitwerking -->
        <?php
        $aantal = 4;
        $kleur1 = "gold";
        $kleur2 = "pink";

        for ($i=0; $i < $aantal; $i++) {
              echo '<li style="background-color: ' . $kleur1 . '";>' . $kleur1 . '</li>';
              echo '<li style="background-color: ' . $kleur2 . '";>' . $kleur2 . '</li>';
        }

    

        ?>
        <!--Einde uitwerking -->
    </body>
</html>
