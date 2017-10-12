<?php
$sql = 'INSERT INTO cursus (code,omschrijving,type,lengte)' . VALUES ('WEB', 'Webprogrammeren', 'ALG', 3);
$stmt = $pdo->prepare($sql);
$stmt->execute();

$res = $stmt->rowCount();
echo $res . ' record(s) toegevoegd';