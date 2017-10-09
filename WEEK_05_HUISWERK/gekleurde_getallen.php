<!DOCTYPE html>
<html>
<head>
  <metacharset="UTF-8">
  <title>blauweballen</title>
</head>
<body>
<?php
for ($i=1; $i<=30; $i++) {
    $color='red';
    if ($i>20) {
        $color='blue';
    } elseif ($i>10) {
        $color='green';
    }
    echo "<spanstyle=\"color:".$color."\">".$i."</span>";
}

    ?>
</body>
</html>
