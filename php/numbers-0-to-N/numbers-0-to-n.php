<?php
class SequenceSum
{

    public function showSequence($count)
    {
        if ($count < 0) {
            return "{$count}<0";
        }
        if ($count === 0) {
            return '0=0';
        }
        if ($count > 0) {
            $array = range(0, $count);
            return implode('+', $array) . ' = ' . array_sum($array);
        }
    }
}
