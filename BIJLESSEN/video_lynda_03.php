<?php
//LEAVE ECHO OUT OF YOUR FUNCTION
function add($val1, $val2)
{
    $sum = $val1 + $val2;
    return $sum;
}

$result1 = add(3, 4);
$result2 = add(5, $result1);

echo $result2 . '<br />';

//MULTIPLE RETURNS, USE ARRAY
function add_subt($val1, $val2)
{
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return [$add,$subt];
}

$result_array = add_subt(10, 5);
echo 'Add: ' . $result_array[0] . '<br />';
echo 'Subt: ' . $result_array[1] . '<br />';
