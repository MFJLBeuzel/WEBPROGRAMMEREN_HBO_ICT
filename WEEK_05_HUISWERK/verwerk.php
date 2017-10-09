<!DOCTYPE html>
<html>
<head>
  <title>Verwerk</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="" />
</head>
<body>
<?php
if ((isset($_POST["cijfer"]) && empty($_POST["cijfer"]))||
(isset($_POST["leeftijd"]) & empty($_POST["leeftijd"]))) {
    echo 'Rapportcijfer en leeftijd zijn verplicht!';
} else {
    $cijfer = $_POST["cijfer"];
    $leeftijd = $_POST["leeftijd"];
    if ($cijfer < 1 || $cijfer > 10 || $leeftijd <16 || $leeftijd > 120) {
        echo 'Een cijfer moet tussen 1 en 10 liggen. De leeftijd tussen 16 en
              120!';
    } else {
        echo 'Je geeft de intro een ' . $cijfer . '<br />';
        echo 'Je bent ' . $leeftijd . ' jaar oud<br />';
        echo 'Je vond de algemene indruk van de intro: ' . $_POST["indruk"] .
              '<br />';
    }
}
    ?>
 <br /><br />
 <a href="rapport.php">Terug naar het evaluatieformulier.</a>
</body>
</html>
