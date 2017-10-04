<?php
require __DIR__ . '/../app/src/app.php';
?>
<html>
<head>
  <title>PROJECT_SIGHTING</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="css/application.css" />
</head>
<body>
    <?php
    //.. is used in php for looking back one directory
    include ('../app/views/header.php');
    include ('../app/views/content.php');
    include ('../app/views/footer.php');

    ?>
    <main class = "row">

    </main>
</body>
</html>


<form class="" action="index.php" method="post">
    <label for="date">Datum van "sighting</label><br>
    <input type="text" name="date" value="">
    <hr>
    <label for="email">Je e-mail</label><br>
    <input type="text" name="email" value="">
    <hr>
    <label for="desc">Omschrijf de "sighting"</label><br>
    <textarea name="desc" cols="40" rows="8"></textarea>
    <br>
    <input type="submit" value="Verzenden">
</form>
