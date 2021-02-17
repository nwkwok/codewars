<?php
function solve($s)
{
    $tracker = array('upper' => 0, 'lower' => 0);

    for ($i = 0; $i < strlen($s); $i++) {
        ctype_upper($s[$i]) ? $tracker['upper'] += 1 : $tracker['lower'] += 1;
    }
    $output = '';
    if ($tracker['upper'] > $tracker['lower']) {
        $output = strtoupper($s);
    }
    if ($tracker['upper'] <= $tracker['lower']) {
        $output = strtolower($s);
    }

    return $output;
}
