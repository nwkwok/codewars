<?php

function partlist($arr)
{

    // What's happening?
    // Index 0 + implode indexes greater than 0
    // Index <= 1 + implode indexes greater than 1
    // Index <= 2 + implode indexes greater than 2
    // Index <= 3 + imploxde indexes greater than 3
    // Loop through the array
    $output = array();

    for ($i = 0; $i < count($arr) - 1; $i++) {
        $firstSlice = array_slice($arr, 0, $i + 1);
        $secondSlice = array_slice($arr, $i + 1);

        $firstPair = implode(' ', $firstSlice);
        $secondPair = implode(' ', $secondSlice);


        $output[$i] = [$firstPair, $secondPair];
    }

    return $output;
}
