<!DOCTYPE html>
<html>
<head>
  <title>Check</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="" />
</head>
<body>
<?php
if ($_POST["onderwerp"] == "") {
    echo 'Onderwerp is niet ingevuld';
} else {
    echo 'Bericht is ' . '<br />' . $_GET["bericht"];
}
    ?>
</body>
</html>
