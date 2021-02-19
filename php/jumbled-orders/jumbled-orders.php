<?php
function getOrder($input)
{
    // Option #1 without helper functions
    // loop through the string
    $wordTracker = '';
    $output = '';
    $orderBank = array(
        'burger' => 0,
        'fries' => 0,
        'chicken' => 0,
        'pizza' => 0,
        'sandwich' => 0,
        'onionrings' => 0,
        'milkshake' => 0,
        'coke' => 0
    );

    for ($i = 0; $i < strlen($input); $i++) {
        $wordTracker .= $input[$i];
        switch ($wordTracker) {
            case 'burger':
                $orderBank['burger'] += 1;
                $wordtracker = '';
                break;
            case 'fries':
                $orderBank['fries'] += 1;
                $wordTracker = '';
                break;
            case 'chicken':
                $orderBank['chicken'] += 1;
                $wordTracker = '';
                break;
            case 'pizza':
                $orderBank['pizza'][] = 'Pizza';
                $wordTracker = '';
                break;
            case 'sandwich':
                $orderBank['sandwich'] += 1;
                $wordTracker = '';
                break;
            case 'onionrings':
                $orderBank['onionrings'] += 1;
                $wordTracker = '';
                break;
            case 'milkshake':
                $orderBank['milkshake'] += 1;
                $wordTracker = '';
                break;
            case 'coke':
                $orderBank['coke'] += 1;
                $wordTracker = '';
                break;
        }
    }

    print_r($orderBank);
    // word tracker
    // when word tracker == string
    // push tracker with first letter uppcased
    // Loop through that array and append to an output. 
}
