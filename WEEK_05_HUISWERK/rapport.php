<!DOCTYPE html>
<html>
<head>
  <title>Rapport</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="" />
</head>
<body>
Beste student, je hebt meegedaan...<br />
<form method="post" action="verwerk.php">
  <div class="rechts">
    Rapportijfer: <input type="text" name="cijfer" /><br />
    Leeftijd: <input type="text" name="leeftijd" /><br />
  <input type="submit" value="Verstuur!" />
  </div>
  <div>
    <input type="radio" name="indruk" value="Super" checked="1" />Super<br />
    <input type="radio" name="indruk" value="Goed" />Goed<br />
    <input type="radio" name="indruk" value="Matig" />Matig<br />
    <input type="radio" name="indruk" value="Slecht" />Slecht<br />
  </div>
</form>
</body>
</html>
