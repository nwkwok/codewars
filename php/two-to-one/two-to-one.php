<?php

function longest($a, $b)
{
    $chars = array_unique(str_split($a . $b));
    sort($chars);
    return implode('', $chars);
}
