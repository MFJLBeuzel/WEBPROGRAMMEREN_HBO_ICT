<?php

function say_hello()
{
    echo 'Hallo wereld! <br />';
}

say_hello();

function say_hello_to($word)
{
    echo 'Hallo ' . $word . '!<br />';
}

say_hello_to('Jonathan');

function better_hello($greeting, $target, $punct)
{
    echo $greeting . ' ' . $target . $punct . '<br />';
}

better_hello('Hello', 'Enzo', '!');
