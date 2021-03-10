<?php

function smallest($n)
{
    $intStr = strval($n);
    $smallest = null;
    $smIndex = null;

    // Loop through the # till we find the smallest int
    // Once we find that integer, we need to store that in $smallest
    for ($i = 0; $i < strlen($intStr); $i++) {
        if (!isset($smallest)) {
            $smallest = $intStr[$i];
        }
        if ($smallest > $intStr[$i]) {
            $smallest = $intStr[$i];
            $smIndex = $i;
        }
    }
    // Here we have smallest as the value and smIndex as to where the index is located. 
    // We now need to find the second smallest #, swap the smallest with the 2nd smallest, grab the # that was swapped by the 2nd smallest and loop through the rest of the numbers and place it where it would make the number the lowest. 


}
