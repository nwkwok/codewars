<?php
function high($x)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

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

    print_r($wordBank);
    // find first instance of highest key and return key
    $highestWord = array_keys($wordBank, max($wordBank));
    print_r($highestWord);
}

high('byevrg dxukwzd jknpxwifj');
