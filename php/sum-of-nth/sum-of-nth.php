<?php

function series_sum($n)
{
    $sum = 0;

    for ($i = 0, $divider = 1; $i < $n; $i++, $divider += 3) {
        $sum += 1 / $divider;
    }

    return number_format($sum, 2, '.', '');
}

echo series_sum(2);

  
// echo seriesSum(1);
// echo '\n';
// echo seriesSum(2);
// echo '\n';
// echo seriesSum(3);
// echo '\n';
// echo seriesSum(4);
