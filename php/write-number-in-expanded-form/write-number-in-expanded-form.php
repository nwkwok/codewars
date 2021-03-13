<?php
function expanded_form(int $n): string
{
    $revNum = strrev($n);
    $strArr = array();
    $output = '';

    for ($i = 0; $i < strlen($revNum); $i++) {
        $strArr[] = $revNum[$i] . str_repeat('0', $i);
    }

    for ($j = count($strArr) - 1; $j >= 0; $j--) {
        if ($j == 0) {
            $output .= $strArr[$j];
        } elseif ($strArr[$j] == 0) {
            continue;
        } else {
            $output .= $strArr[$j] . ' + ';
        }
    }


    return $output;
}
