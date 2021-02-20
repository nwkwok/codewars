<?php

function kebabize($string)
{
    $wordTracker = array();
    $currentTracker = '';
    $output = '';
    for ($i = 0; $i < strlen($string); $i++) {

        if (is_numeric($string[$i])) {
            continue;
        }
        if (!ctype_upper($string[$i])) {
            $currentTracker .= $string[$i];
        }
        if (ctype_upper($string[$i])) {
            if (empty($currentTracker)) {
                $currentTracker = strtolower($string[$i]);
            } else {
                $wordTracker[] = $currentTracker;
                $currentTracker = strtolower($string[$i]);
            }
        }
    }
    $wordTracker[] = $currentTracker;

    foreach ($wordTracker as $word) {
        $output .= $word . '-';
    }

    return substr($output, 0, -1);
}
