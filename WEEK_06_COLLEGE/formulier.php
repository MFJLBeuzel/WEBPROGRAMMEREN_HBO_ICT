<!DOCTYPE html>
<html>
<head>
  <title>Aanmelding</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="" />
</head>
<body>
<form class="form" action="formulier.php" method="post">
E-mail: <input type="email" name="email" value="<?php echo $_POST["email"]; ?>">
<br /><br/>
Onderwerp: <input type="text" name="onderwerp" value=""><br /><br />
Bericht: <textarea name="bericht" value=""><br /><br />
<input type="submit" name="submit" value="Verstuur bericht!" />
</form>
<?php
if (isset($_POST["submit"])) {
    if ($_POST["onderwerp"] == "") {
        echo 'Onderwerp is niet ingevuld';
    } else {
        echo 'Bericht is ' . '<br />' . $_GET["bericht"];
    }
}
    ?>

</body>
</html>
