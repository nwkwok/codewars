<?php
function high($x)
{
    $alphabet = 'abcdefghijklmopqrstuvwxyz';

    // Split each word into an indece
    $wordArr = explode(' ', $x);

    // Create empty associative array
    $wordBank = array();

    // Grab each word from $wordArr as $word
    foreach ($wordArr as $word) {

        // Loop through each letter in $word and compare $alphabet
        for ($i = 0; $i < strlen($word); $i++) {
            $wordBank[$word] += strpos($alphabet, $word[$i]) + 1;
        }
    }

    // find first instance of highest key and return key
    $highestWord = array_keys($wordBank, max($wordBank));
    return $highestWord[0];
}
