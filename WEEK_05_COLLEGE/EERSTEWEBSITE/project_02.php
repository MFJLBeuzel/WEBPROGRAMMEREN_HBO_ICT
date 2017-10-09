<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name = "formulier" action = "send2.php" method = "get">
      Typ hier uw voornaam: <input type = "text" name = "voornaam">
      <input type="radio" name="sex" value="male" /> Man
      <input type="radio" name="sex" value="female" /> Female<br><br>
      Typ hier uw achternaam: <input type = "text" name = "achternaam"><br><br>
      <input type="checkbox" name="device" value="Ipod" checked> Ipod<br>
      <input type="checkbox" name="device" value="Ipad"> Ipad<br>
      <input type="checkbox" name="device" value="Iphone"> Iphone<br><br>
      <input type="submit" value="Verzenden">
    </form>
  </body>
</html>
