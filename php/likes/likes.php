<?php


function likes($names)
{
    switch ($n = count($names)) {
        case 0:
            return 'no one likes this';
        case 1:
            return "{$names[0]} likes this";
        case 2:
            return "{$names[0]} and {$names[1]} like this";
        case 3:
            return "{$names[0]}, {$names[1]} and {$names[2]} like this";
        default:
            $n -= 2;
            return "$names[0], {$names[1]} and $n others like this";
    }
}





// function likes($names)
// {
//     $loopNames = [];
//     if (empty($names)) {
//         return "no one likes this";
//     } else {
//         if (count($names) > 3) {
//             $otherLikes = count($names) - 2;
//             foreach ($names as $name) {
//                 $loopNames[] = $name;
//             }
//             return "{$loopNames[0]}, {$loopNames[1]} and {$otherLikes} others like this";
//         }
//         if (count($names) == 3) {
//             foreach ($names as $name) {
//                 $loopNames[] = $name;
//             }
//             return "{$loopNames[0]}, {$loopNames[1]} and {$loopNames[2]} like this";
//         }
//         if (count($names) == 2) {
//             foreach ($names as $name) {
//                 $loopNames[] = $name;
//             }
//             return "{$loopNames[0]} and {$loopNames[1]} like this";
//         }
//         if (count($names) == 1) {
//             foreach ($names as $name) {
//                 $loopNames[] = $name;
//             }
//             return "{$loopNames[0]} likes this";
//         }
//     }
// }
