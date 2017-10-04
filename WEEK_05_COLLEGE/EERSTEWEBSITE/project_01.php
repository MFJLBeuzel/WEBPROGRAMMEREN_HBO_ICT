<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <th>Plaats</th><th>Temp</th>
  <?php
  $temperaturen = ['Assen' => 14.6,'Maastricht' => 17.4,'Zwolle' => 18.5,
  'Amsterdam' => 13.6];

  foreach ($temperaturen as $key => $value) {
      echo "<tr><td>
      $key
      </td><td>
      $value
      </td></tr>";
    }
    ?>
  </body>
</html>
