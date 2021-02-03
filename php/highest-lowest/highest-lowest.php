<?php function highAndLow($numbers)
{
    $array = explode(' ', $numbers);
    $max = max($array);
    $min = min($array);
    return "$max $min";
}
