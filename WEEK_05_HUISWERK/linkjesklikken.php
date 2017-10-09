<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>klikkenklikkenklikkkk</title>
</head>

<body>
  <form method="post" action="linkjesklikken.php">
    URL1:<input type="text" name="url1"><br>URL2:<input type="text" name="url2">
    <br>URL3:<input type="text" name="url3"><input type="submit" value="submit"
    name="submit">
  </form>
  <?php if (isset($_POST["submit"])) {?>
  <table>
    <tr>
      <td>
        <a href="https://<?php echo $_POST["url1"];?>">
            <?php echo $_POST["url1"]; ?>
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="https://<?php echo $_POST["url2"];?>">
            <?php echo $_POST["url2"]; ?>
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="https://<?php echo $_POST["url3"];?>">
            <?php echo $_POST["url3"]; ?>
        </a>
      </td>
    </tr>
  </table>
    <?php } ?>
</body>

</html>
