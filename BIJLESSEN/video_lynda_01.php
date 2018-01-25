<?php
/*
for ($count = 20; $count > 0 ; $count--) {
    if ($count % 2 == 0) {
        echo $count . ' is even.<br />';
    } else {
        echo $count . ' is od.<br />';
    }
}
*/

//FOREACH LOOPS

$person = [
  'first_name' => 'Kevin',
  'last_name' => 'Beethoven',
  'adress' => '123 Main Street',
  'city' => 'LA',
  'state' => 'CA',
  'zip_code' => '90210'
];

foreach ($person as $attribute => $data) {
    $attr_nice = ucwords(str_replace('_', ' ', $attribute));
    echo $attr_nice . ': ' . $data . '<br />';
}
