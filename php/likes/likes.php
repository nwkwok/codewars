<?php

function likes($names)
{
    $loopNames = [];
    if (empty($names)) {
        return "no one likes this";
    } else {
        if (count($names) > 3) {
            $otherLikes = count($names) - 2;
            foreach ($names as $name) {
                $loopNames[] = $name;
            }
            return "{$loopNames[0]}, {$loopNames[1]} and {$otherLikes} others like this";
        }
        if (count($names) == 3) {
            foreach ($names as $name) {
                $loopNames[] = $name;
            }
            return "{$loopNames[0]}, {$loopNames[1]} and {$loopNames[2]} like this";
        }
        if (count($names) == 2) {
            foreach ($names as $name) {
                $loopNames[] = $name;
            }
            return "{$loopNames[0]} and {$loopNames[1]} like this";
        }
        if (count($names) == 1) {
            foreach ($names as $name) {
                $loopNames[] = $name;
            }
            return "{$loopNames[0]} likes this";
        }
    }
}
