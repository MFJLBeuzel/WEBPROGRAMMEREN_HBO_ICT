<?php
$voornaam = $_GET["voornaam"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>De pagina van <?php echo $voornaam; ?> </title>
  <link href="stijl.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <h1>Resultaten</h1>
  <ul>
    <?php foreach ($_GET as $veld => $waarde) {
        echo '<li>' . $veld . ':' . $waarde . '</li>';
} ?>
  </ul>
</body>
</html>
