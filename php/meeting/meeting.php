<?php
function meeting($s)
{
    // split full names by semi colons
    $splitBySemi = explode(';', $s);

    // get array of (first name, last name)
    $firstLast = str_replace(':', ', ', $splitBySemi);

    // loop through each name
    for ($i = 0; $i < count($firstLast); $i++) {
        // create multi-dimensional array with first and last name as each index
        $firstLast[$i] = explode(', ', $firstLast[$i]);

        // reverse first name and last name for each index
        $firstLast[$i] = array_reverse($firstLast[$i]);

        // upper case all the letters
        $firstLast[$i] = strtoupper(implode(', ', $firstLast[$i]));

        // return each name with a parenthesis
        $firstLast[$i] = "({$firstLast[$i]})";
    }

    // sort list ascending by last name
    sort($firstLast);

    // output
    return implode($firstLast);
}
