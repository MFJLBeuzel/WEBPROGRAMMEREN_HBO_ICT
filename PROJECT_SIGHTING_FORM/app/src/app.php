<?php
require __DIR__ . '/../../vendor/autoload.php';

use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

/*
Validation to do: $date exist, $email exists, $description exists, remove
whitespace, sanitize output, validate email, validate date.
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $depart_date = trim($_POST['dateDeparture']);
    $return_date = trim($_POST['dateReturn']);
    $email = trim($_POST['email']);
    $reason = trim($_POST['reason']);


    $depart_validator = Validator::date()->notEmpty()->setName('Departure Date');
    $return_validator = Validator::date()->notEmpty()->between($depart_date, '2050-01-01')->setName('Return');
    $email_validator = Validator::email()->notEmpty()->setName('Email');
    $desc_validator = Validator::stringType()->length(1, 750)->setName('Reason For Travel');

    try {
        $depart_validator->assert($depart_date);
        $return_validator->assert($return_date);
        $email_validator->assert($email);
        $desc_validator->assert($description);

        echo date('F jS Y', strtotime($date));
        echo $email;
        echo $description;
    } catch (NestedValidationException $e) {
        echo '<ul>';
        foreach ($e->getMessages() as $message) {
            echo "<li>$message</li>";
        }
        echo '</ul>';
    }
}
