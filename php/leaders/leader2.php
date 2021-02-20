<?php
function arrayLeaders($numbers)
{
    $leaderArr = array();
    $sumTracker = 0;

    for ($i = 0; $i < count($numbers); $i++) {
        for ($j = $i + 1; $j < count($numbers); $j++) {
            $sumTracker += $numbers[$j];
        }
        if ($numbers[$i] > $sumTracker) {
            $leaderArr[] = $numbers[$i];
        }
        $sumTracker = 0;
    }
    return $leaderArr;
}
