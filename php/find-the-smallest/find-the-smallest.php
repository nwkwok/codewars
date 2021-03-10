<?php

function smallest($n)
{
    // Find the smallest number and replace it in the first index
    # because this will always make the smallest number
    $intStr = strval($n);
    $smallest = null;
    $smIndex = null;

    for ($i = 0; $i < strlen($intStr); $i++) {
        if (!isset($smallest)) {
            $smallest = $intStr[$i];
        }
        if ($smallest > $intStr[$i]) {
            $smallest = $intStr[$i];
            $smIndex = $i;
        }
    }
    echo $smallest . "\n";
    echo $smIndex;

    // Loop through the # till we find the smallest int
    // Once we find that integer, we need to store that in $smallest
    // We need to store the index and the actual number
    // After we're doing looping through the #, we need swap the indexes


}
