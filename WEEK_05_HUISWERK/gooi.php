<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>DICE2</title>
</head>
<body>
<?php
$aantalkeer = $_POST["aantal"];
$gem = 0;
$totaal = 0;
$aantal6 = 0;
$perc6 = 0;

if ($aantalkeer < 1 || empty($aantalkeer)) {
    echo 'Aantal moet worden ingevuld.<br />';
} else {
    for ($aantal=1; $aantal <= $aantalkeer; $aantal++) {
        $waarde = rand(1, 6);
        $totaal = $waarde + $totaal;
        if ($waarde == 6) {
            $aantal6++;
        }
    }
        $gem = $totaal/$aantalkeer;
        $perc6 = ($aantal6/$aantalkeer) * 100;
        echo 'Het gem van de worpen: ' . $gem . '<br />Bij een eerlijke
    dobbelsteen is dit 3,5 <br />';
        echo 'Het perc van het aantal keer dat er zes is gegooid: ' .
        $perc6 .
        '%<br />Bij een eerlijke dobbelsteen zou dit 16,7% zijn';
}
?>
</body>
</html>
