<?php
# INCOMPLETE still need to compare arrays
$leaders = array();
$notLeaders = array();
$array =  array(4, 12, 5, 7, 2);

function findLeaders($array)
{
    # loop through $array to get a number
    for ($i = 0; $i < count($array); $i++) {
        # once we get the number, we want to loop through the array again to get the next number
        for ($n = ($i + 1); $n < count($array); $n++) {
            # Check $i with $n and determine if it is a leader or not.
            if ($array[$i] < $array[$n]) {
                echo "{$array[$i]} is not a leader \n";
                $notLeaders[] = $i;
                break;
            }
        }
    }
    print_r($notLeaders);
}

function compareArray($nonLeaders, $arrToCheck)
{
    // Get a number from array to check
    for ($i = 0; $i < count($arrToCheck); $i++) {
        foreach ($nonLeaders as $num) {
            if ($arrToCheck[$i] === $num) {
                break;
            } elseif ($arrToCheck[$i] !== $num) {
                $leaders[] = $arrToCheck[$i];
            }
        }
    }
}

findLeaders($array);
compareArray($notLeaders, $array);
var_dump($leaders);
