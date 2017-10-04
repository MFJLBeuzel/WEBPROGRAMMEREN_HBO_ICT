<?php
use Respect\Validation\Validator;

function validate_date($date_string)
{
    //If the $date_string is not empty, return true; otherwise, return false.
    if (Validator::notEmpty()->validate($date_string)) {
        return date('m/d/Y', $date_string);
    } else {
        return $date_string . ' lijkt niet geldig.';
    }
}
