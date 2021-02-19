<?php
function spinWords(string $str): string
{

    # option 1 - w helper functions
    //     $wordArr = explode(' ', $str);
    //     for($i=0; $i<count($wordArr); $i++){
    //       if (strlen($wordArr[$i]) >= 5) {
    //         $wordArr[$i] = strrev($wordArr[$i]);
    //       }
    //     }

    //     $output = implode(' ', $wordArr);
    //     return $output;

    #option 2 - w/out helper functions
    // loop through the string
    // output variable to store appended strings
    // loop through the string letter by letter pushing the letters into output
    // if string = ' ', 
    // strlength >= 5?
    // create new variable of word to reverse
    // reverse and append to output
    // else continue




    $currentWord = '';
    $output = '';

    for ($i = 0; $i < strlen($str); $i++) {
        // If string is not empty append to current word
        if ($str[$i] !== ' ') {
            $currentWord .= $str[$i];
        }

        // If string is empty, check length of current word
        if ($str[$i] == ' ') {
            //If string is less than 5, append current word to output and reset current word
            if (strlen($currentWord) < 5) {
                $output .= " {$currentWord}";
                $currentWord = '';
            }
            if (strlen($currentWord) >= 5) {
                // If string is greater than 5, reverse the string, append to output, reset string
                $length = strlen($currentWord);
                for ($i = 0, $j = $length - 1; $i < ($length / 2); $i++, $j--) {
                    $t = $currentWord[$j];
                    $currentWord[$j] = $currentWord[$i];
                    $currentWord[$i] = $t;
                }
                $output .= " {$currentWord}";
                $currentWord = '';
            }
        }
    }
    return $output;
}
