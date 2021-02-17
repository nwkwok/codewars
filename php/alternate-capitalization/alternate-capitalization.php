<?php

function capitalize($s)
{
    $output = [$s, $s];
    for ($i = 0; $i < count($output); $i++) {
        for ($l = $i; $l < strlen($s); $l += 2) {
            $output[$i][$l] = strtoupper($output[$i][$l]);
        }
    }
    return $output;
}
