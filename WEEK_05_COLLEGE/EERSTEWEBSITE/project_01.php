<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Week 5</title>
  </head>
  <body>
   
  <?php
  $temperaturen = ['Assen' => 14.6,'Maastricht' => 17.4,'Zwolle' => 18.5,
  'Amsterdam' => 13.6];
  $gem = array_sum($temperaturen)/count($temperaturen);
    ?>
<table style="background-color: lightblue">
            <th>Plaats</th><th>Temperatuur</th>
<?php
foreach ($temperaturen as $key => $value) {
    echo '<tr><td>' . $key . '</td><td>' .  $value . '</td></tr>';
}
    ?>
<tr >
                <td style="background-color: gold ">Gemiddelde</td><td style="background-color: gold "><?php print($gem); ?></td>
            </tr>
        </table>
        <br>
   </body>
</html>
