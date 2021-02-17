<?php

// Multiples of 3 prints 'Fizz'
// Multiples of 5 prints 'Buzz'
// Multiples of 3 && 5 prints 'FizzBuzz'
// Loop 100x

for ($i = 1; $i < 100; $i++) {
    if ($i % 5 == 0 && $i % 3 == 0) {
        pre('FizzBuzz');
    } elseif ($i % 3 == 0) {
        pre('Fizz');
    } elseif ($i % 5 == 0) {
        pre('Buzz');
    } else {
        pre($i);
    }
}

function pre($string)
{
    echo "\n";
    echo $string;
    echo "\n";
}
