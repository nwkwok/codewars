<?php

function primeNumber($num)
{
    $isPrime = TRUE;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = FALSE;
        }
    }
    echo $isPrime ? "{$num} is prime!" : "{$num} is not prime!";
}
primeNumber(11);
