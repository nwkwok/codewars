<?php

function number2words(int $n)
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

    print_r($oneToTwenty);
    print_r($twentyToNinety);
    $output = '';
    $revInt = strrev(strval($n));

    if (isset($revInt[5])) {
        if ($revInt[5] == 0 or !empty($revInt[5])) {
            $hundredThousand = $oneToTwenty[$revInt[5]];
            $output .= $hundredThousand . ' ';
        }
    }
    if (isset($revInt[4])) {
        if ($revInt[4] == 0 or !empty($revInt[4])) {
            $tenThousand = $oneToTwenty[$revInt[4]];
            $output .= $tenThousand . ' ';
        }
    }
    if (isset($revInt[3])) {

        if ($revInt[3] == 0 or !empty($revInt[3])) {
            $oneThousand = $oneToTwenty[$revInt[3]];
            $output .= $oneThousand . ' ';
        }
    }
    if (isset($revInt[2])) {

        if ($revInt[2] == 0 or !empty($revInt[2])) {
            $oneHundred = $oneToTwenty[$revInt[2]];
            $output .= $oneHundred . ' ';
        }
    }
    if (isset($revInt[1])) {

        if ($revInt[1] == 0 or !empty($revInt[1])) {
            $ten = $oneToTwenty[$revInt[1]];
            $output .= $ten . ' ';
        }
    }
    if (isset($revInt[0])) {

        if ($revInt[0] == 0 or !empty($revInt[0])) {
            $one = $oneToTwenty[$revInt[0]];
            $output .= $one . ' ';
        }
    }

    echo $output;
}
