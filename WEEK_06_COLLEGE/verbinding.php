<?php
//verbinding maken met MySQL
$db = 'mysql:host=localhost;dbname=cursus;port=3306';
$user = 'root';
$pass = '';
$pdo = new PDO($db, $user, $pass);
//voorbereiden
$stmt = $pdo->prepare("SELECT * FROM cursus.medewerker");
//uitvoeren
$stmt->execute();

echo '<ul>';
//loop langs alle rijen
while ($row = $stmt->fetch())
{      
    //kolom naam ophalen
    $naam = $row['naam'];
    $functie = $row['functie'];
    echo '<li>' . $naam . ', ' . $functie . '</li>';
}
echo '</ul>';

//verbinding verbreken
$pdo = NULL;
