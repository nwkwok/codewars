<?php
function persistence(int $num): int
{
    $singleDigit = false;
    $persistence = 0;

    while ($singleDigit == false) {
        if ($num < 10) {
            $singleDigit = true;
        }
        $numArr = str_split($num);
        $result = 1;

        foreach ($numArr as $int) {
            $result *= $int;
        }

        $num = $result;
        $persistence++;
    }
    return $persistence - 1;
}
