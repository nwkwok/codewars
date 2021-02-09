<?php

function tower_builder(int $n): array
{
    $tower = [];
    $width = $n * 2 - 1;
    for ($i = 1; $i <= $n; $i++) {
        $floor = $i * 2 - 1;
        $tower[] = str_pad(str_repeat('*', $floor), $width, ' ', STR_PAD_BOTH);
    }

    return $tower;
}
