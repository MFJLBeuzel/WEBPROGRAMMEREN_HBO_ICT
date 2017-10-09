<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        echo 'Naam is verplicht!' . '<br />';
    } elseif (empty($_POST["age"])) {
        echo 'Leeftijd is verplicht!' . '<br />';
    } else {
        $naam = $_POST["name"];
        $age = $_POST["age"];
        $aantal = 18 - $age;
    }
}

if ($age < 0) {
    echo 'Leeftijd moet groter of gelijk zijn aan 0.';
} elseif ($age < 18) {
    echo 'Over ' . $aantal . ' jaar is ' . $naam . 'volwassen.';
} elseif ($age > 21 && $age < 65) {
    echo $naam . ' is nu eigenlijk pas echt volwassen.';
}
