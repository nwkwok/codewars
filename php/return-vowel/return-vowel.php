<?php
function getCount($str)
{
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    $array = str_split($str);
    foreach ($array as $letter) {
        if (in_array($letter, $vowels)) {
            $vowelsCount += 1;
        }
    }

    return $vowelsCount;
}
