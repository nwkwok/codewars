<?php
/*
A year is a leap year if the following conditions are satisfied: 
The year is multiple of 400. 
The year is multiple of 4 and not multiple of 100.
*/

// if year % 400 == 0 it is a leap year
// elseif year % 4 == 0 && year % 100 !== 0 == it is a leap year

function isLeap($year)
{
    if ($year % 400 == 0) {
        echo "{$year} is a leap year.";
    } elseif ($year % 4 == 0 && $year % 100 !== 0) {
        echo "{$year} is a leap year.";
    }
}
