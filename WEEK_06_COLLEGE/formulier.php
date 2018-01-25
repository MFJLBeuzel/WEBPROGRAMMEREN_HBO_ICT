<!DOCTYPE html>
<html>
<head>
  <title>Aanmelding</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="" />
</head>
<body>
<form method="post" action="formulier.php">
E-mail: <input type="email" name="email" value="<?php echo $_POST["email"]; ?>"> <br/><br/>
Onderwerp: <input type="text" name="onderwerp" value="<?php echo $_POST["onderwerp"]; ?>"><br/><br/>
Bericht: <input type="text" name="bericht"value="<?php echo $_POST["bericht"]; ?>"><br/><br/>
<input type="submit" name="submit" value="Verstuur bericht!">
</form>
<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        echo 'E-mail is niet ingevoerd' . '<br />';
    }
    if (empty($_POST["onderwerp"])) {
        echo 'Onderwerp is niet ingevuld' . '<br />';
    }
    if (empty($_POST["bericht"])) {
        echo 'Bericht is niet ingevuld' . '<br />';
    } else {
        echo 'Bericht is ' . $_POST["bericht"];
    }
}
    ?>

</body>
</html>
