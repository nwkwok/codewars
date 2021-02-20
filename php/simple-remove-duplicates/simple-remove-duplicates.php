<?php
function solve($arr)
{

    $keyBank = array();

    for ($i = 0; $i < count($arr); $i++) {
        $keyBank[$arr[$i]][] = $i;
    }

    foreach ($keyBank as $key) {
        if (count($key) > 1) {
            for ($j = 0; $j < count($key[$j]) - 1; $j++) {
                unset($key[$j]);
            }
        }
    }

    return array_keys($keyBank);
}
