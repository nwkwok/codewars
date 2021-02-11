<?php

$string = 'abcdefgazxcvbnmfgkja';

// creating string array
$letterBank = str_split($string);

$output = array();
$leader = '';

for ($i = 0; $i < count($letterBank); $i++) {
    $output[$i] = $letterBank[$i];
    for ($n = $i + 1; $n < count($letterBank); $n++) {
        if ($letterBank[$i] !== $letterBank[$n]) {
            $output[$i] .= $letterBank[$n];
            // append letter to output[i]
        } else {
            break;
        }
    }
    if (strlen($leader) < strlen($output[$i])) {
        $leader = $output[$i];
    }
}
print_r($output);
echo $leader;

  // categories for bigO notation
    // if for loops started at 0 and went the full length it would be n squared
    // if nested for loop starts at $i then it is n(log(n)) / n**2
    // n (one for loop could be n - find largest integer in an array) 
    // 0 or 1 (instant look up - there's a has table in the back)
