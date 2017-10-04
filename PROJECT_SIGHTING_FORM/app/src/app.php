<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/validation.php';
/*
Validation to do: $date exist, $email exists, $description exists, remove
whitespace, sanitize output, validate email, validate date.
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = trim($_POST['date']);
    $email = trim($_POST['email']);
    $description = trim($_POST['desc']);

    if (!empty($Date) && !empty($email) && !empty($description)) {
        echo validate_date($date);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email: $email</p>";
        }
        echo '<p>' . htmlspecialchars($description) . '</p>';
    }
}
