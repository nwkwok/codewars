<?php
function comp($a1, $a2)
{
    // $a2 presumably holds all the squared values
    // Loop through $a1
    // square each index
    // loop through $a2 to see if the squared value exists
    // If it does, continue;
    // else return false

    // loop through $a1 and get squared value
    for ($i = 0; $i < count($a1); $i++) {
        $squared = pow($a1[$i], 2);
        // Take that squared value, loop through the 2nd array
        for ($j = 0; $j < count($a2); $j++) {
            $match = false;
            if ($a2[$j] == $squared) {
                $match = true;
                break;
            }
        }
        if (!$match) {
            return false;
        }
    }
    return true;
}
