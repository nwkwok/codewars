<?php

function solution($s, $n)
{
    $output = array();

    for ($i = 0; $i < $n; $i++) {
        $output[] = $s;
    }
    $result = implode('', $output);
    return $result;
}
