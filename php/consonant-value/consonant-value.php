<?php

function solve($s)
{
    // Create an alphabet array using range
    $alphabet = range('a', 'z');
    $vowels = array('a', 'e', 'i', 'o', 'u');

    // Create an array that stores substrings in each index: $subStrArr
    $subStrArr = array();

    // Create an array that stores the substring values: $valuesArr
    $valuesArr = array();

    // Split the string into an array: $strArr
    $strArr = str_split($s);

    // Replace vowels from the array
    // Loop through string array
    for ($i = 0; $i < count($strArr); $i++) {
        // If we find values that are not vowels
        // Replace the value with ''
        if (in_array($strArr[$i], $vowels)) {
            $strArr[$i] = '';
        }
    }

    // Grab each index and loop through it
    // Take this index value    
    // If != '', append to $subStrArr[$i];
    // break;
    for ($i = 0; $i < count($strArr); $i++) {
        for ($n = $i; $i < count($strArr); $n++) {
            if ($strArr[$n] != '') {
                $subStrArr[$i] .= $strArr[$n];
            } else {
                break;
            }
        }
    }

    // Reset index values
    $subStrArr = array_values($subStrArr);
    print_r($subStrArr);

    // After this runs, we should get $subStrArr where each index holds consonant substrings.

    // Grab index value and split that string into an array
    for ($i = 0; $i < count($subStrArr); $i++) {
        $indexSplit = str_split($subStrArr[$i]);

        // Loop through each letter in that index, find its value and aggregate to $valuesArr[$i]
        for ($n = 0; $n < count($indexSplit); $n++) {
            $letterValue = array_search($indexSplit[$n], $alphabet) + 1;
            $valuesArr[$i] += $letterValue;
        }
    }

    // return max consonant str value
    return max($valuesArr);
}
