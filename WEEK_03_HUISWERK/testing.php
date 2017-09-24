<?php
const nl = "\n";

$testing = [
  //array's key
  'test1' => [
    1,
    2,
    3,
    4,
    5,
  ],
  'test2' => [
    'a',
    'b',
    'c',
    'd',
    'e',
  ],
];

echo $testing['test1'][0] . nl;
echo $testing['test2'][3] . nl;
echo count($testing['test1']) . nl;
//implode joins all elements of the array into a string
echo implode(' ', $testing['test2']) . nl;
//shuffle
shuffle($testing['test1']) . nl;
echo implode(' ', $testing['test1']) . nl;

//while loop
$i = 1;

while ($i <= 10) {
    $waarde = $i * 10;
    echo $i . ' keer 10 is ' . $waarde . nl;
    $i++;
}
//while loop omgezet in for loop
for ($i= 1; $i <= 10; $i++) {
    $waarde = $i * 10;
    echo $i . ' keer 10 is ' . $waarde . nl;
}

//foreach
$kleuren = ['blauw' => 01,
            'rood' => 02,
            'zwart' => 03,
            'wit' => 04,
            'paars' => 05,];

foreach ($kleuren as $kleur => $code) {
    echo 'Kleur= ' . $kleur . nl . 'Code= ' . $code . nl;
}
