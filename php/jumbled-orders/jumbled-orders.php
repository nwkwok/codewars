<?php
function getOrder($input)
{
    $output = '';
    $orderTracker = array([], [], [], [], [], [], [], []);
    $wordTracker = '';
    for ($i = 0; $i < strlen($input); $i++) {
        $wordTracker .= $input[$i];

        switch ($wordTracker) {
            case ('burger'):
                $orderTracker[0][] = 'Burger';
                $wordTracker = '';
                break;
            case ('fries'):
                $orderTracker[1][] = 'Fries';
                $wordTracker = '';
                break;
            case ('chicken'):
                $orderTracker[2][] = 'Chicken';
                $wordTracker = '';
                break;
            case ('pizza'):
                $orderTracker[3][] = 'Pizza';
                $wordTracker = '';
                break;
            case ('sandwich'):
                $orderTracker[4][] = 'Sandwich';
                $wordTracker = '';
                break;
            case ('onionrings'):
                $orderTracker[5][] = 'Onionrings';
                $wordTracker = '';
                break;
            case ('milkshake'):
                $orderTracker[6][] = 'Milkshake';
                $wordTracker = '';
                break;
            case ('coke'):
                $orderTracker[7][] = 'Coke';
                $wordTracker = '';
                break;
        }
    }

    for ($i = 0; $i < count($orderTracker); $i++) {
        if (!empty($orderTracker[$i])) {
            foreach ($orderTracker[$i] as $item) {
                $output .= "{$item} ";
            }
        }
    }

    return rtrim($output);
}
