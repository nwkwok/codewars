<?php

function number2words(int $n): string
{
    $oneToTwenty = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen'
    );

    $twentyToNinety = array(
        2 => 'twenty',
        3 => 'thirty',
        4 => 'forty',
        5 => 'fifty',
        6 => 'sixty',
        7 => 'seventy',
        8 => 'eighty',
        9 => 'ninety'
    );

    $output = '';
    $revInt = strrev(strval($n));

    // Check if # in hundred thousand
    if (isset($revInt[5])) {
        // return n hundred thousand
        if ($revInt[5] > 0 and $revInt[4] == 0 and $revInt[3] == 0) {
            $hundredThousand = $oneToTwenty[$revInt[5]];
            $output .= $hundredThousand . ' hundred thousand ';
        }
        if ($revInt[5] > 0 and !isset($hundredThousand)) {
            $hundredThousand = $oneToTwenty[$revInt[5]];
            $output .= $hundredThousand . ' hundred ';
        }
    }

    // Check if # in ten thousand
    if (isset($revInt[4])) {
        // return nn thousand
        if ($revInt[4] == 1 and $revInt[3] == 0 and $revInt[2] == 0 and $revInt[1] == 0 and $revInt[0] == 0) {
            $tenThousand = 'ten thousand';
            $output .= $tenThousand;
            return $output;
        }
        // return nn thousand where nn > 19
        if ($revInt[4] > 1 and $revInt[3] == 0 and $revInt[2] == 0 and $revInt[1] == 0 and $revInt[0] == 0) {
            $tenThousand = $twentyToNinety[$revInt[4]];
            $output .= $tenThousand . 'thousand';
            return $output;
        }
        if ($revInt[4] == 1 and $revInt[3] > 0) {
            $tenThousand = $oneToTwenty[$revInt[4] . $revInt[3]];
            $output .= $tenThousand . ' thousand ';
        }
        if ($revInt[4] == 1 and $revInt[3] == 0) {
            $tenThousand = $oneToTwenty[$revInt[4] . $revInt[3]];
            $output .= $tenThousand . ' thousand ';
        }

        // Hypenated # check > 20 and ones digit is > 0
        if ($revInt[4] > 1 and $revInt[3] > 0) {
            $tenThousand = $twentyToNinety[$revInt[4]] . '-' . $oneToTwenty[$revInt[3]];
            $output .= $tenThousand . ' thousand ';
        }
        if ($revInt[4] > 1 and $revInt[3] == 0) {
            $tenThousand = $twentyToNinety[$revInt[4]];
            $output .= $tenThousand . ' thousand ';
        }
    }

    // Check if # in thousand
    if (isset($revInt[3])) {
        // Return n thousand
        if ($revInt[3] > 0 and $revInt[2] == 0 and $revInt[1] == 0 and $revInt[0] == 0) {
            $oneThousand = $oneToTwenty[$revInt[3]];
            $output .= $oneThousand . ' thousand';
            return $output;
        }

        if ($revInt[3] > 0 and !isset($tenThousand)) {
            $oneThousand = $oneToTwenty[$revInt[3]];
            $output .= $oneThousand . ' thousand ';
        }
    }

    // Check hundreds
    if (isset($revInt[2])) {
        if ($revInt[2] > 0 and $revInt[1] == 0 and $revInt[0] == 0) {
            $oneHundred = $oneToTwenty[$revInt[2]];
            $output .= $oneHundred . ' hundred';
            return $output;
        }
        if ($revInt[2] > 0) {
            $oneHundred = $oneToTwenty[$revInt[2]];
            $output .= $oneHundred . ' ' . 'hundred ';
        }
    }
    // Check tens
    if (isset($revInt[1])) {
        if ($revInt[1] > 1 and $revInt[0] == 0) {
            $ten = $twentyToNinety[$revInt[1]];
            $output .= $ten;
        }
        if ($revInt[1] == 1 and $revInt[0] == 0) {
            $ten = 'ten';
            $output .= $ten;
            return $output;
        }
        if ($revInt[1] == 1 and $revInt[0] > 0) {
            $ten = $oneToTwenty[$revInt[1] . $revInt[0]];
            $output .= $ten;
        }

        // Hypenated # check > 20 and ones digit is > 0
        if ($revInt[1] > 1 and $revInt[0] > 0) {
            $ten = $twentyToNinety[$revInt[1]] . '-' . $oneToTwenty[$revInt[0]];
            $output .= $ten;
        }
    }

    // Check ones
    if (isset($revInt[0]) and !isset($ten)) {
        if ($revInt[0] == 0 or !empty($revInt[0])) {
            $one = $oneToTwenty[$revInt[0]];
            $output .= $one;
        }
    }
    return $output;
}
