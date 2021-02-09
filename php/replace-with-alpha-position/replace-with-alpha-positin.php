<?php
function alphabet_position(string $s): string
{
    // Create an array of the alphabet
    $alphabet = range('a', 'z');

    // Split alphabet into indeces
    $strArr = str_split($s);

    // Create empty array to store values
    $outputArr = array();

    // Loop through each letter
    foreach ($strArr as $letter) {

        // Convert each letter to lower case
        $lcStr = strtolower($letter);

        // Check if the letter is in the alphabet array
        if (in_array($lcStr, $alphabet)) {

            // If it is: 
            // search array for str and get that index value
            // add one to make it accurate to the actual alphabet
            // push it into the output array
            $outputArr[] = array_search($lcStr, $alphabet) + 1;
        }
    }

    // Convert output array to a string splitting each index value with a space
    $output = implode(' ', $outputArr);


    return $output;
}
