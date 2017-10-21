<?php
try {
    $pdo = new PDO();
  //query uitvoeren
    $pdo = null;
} catch (PDOException $e) {
    echo 'Error!: ' . $e->getMessage() . '<br/>';
}
