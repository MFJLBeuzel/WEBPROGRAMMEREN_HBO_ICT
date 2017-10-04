<?php
require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>PROJECT_SIGHTING</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="css/application.css" />
</head>
<div class="container">
    <?php
  //.. is used in php for looking back one directory
    include ('../app/views/header.php');
    include ('../app/views/content.php');
    include ('../app/views/footer.php');

    ?>
</div>
</html>
