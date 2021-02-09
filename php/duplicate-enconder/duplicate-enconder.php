<?php

function duplicate_encode($word)
{
    // Create empty variable to capture result
    $result = "";

    // Split letters into an array
    $word = str_split(strtolower($word));

    // Create associate array that sets key as letter and value as # of times it occurs
    $char_count = array_count_values($word);

    // Loop through each letter
    foreach ($word as $char) {

        // Is char_count of letter > or < 1? Append value
        $result .= $char_count[$char] > 1 ? ")" : "(";
    }

    return $result;
}
