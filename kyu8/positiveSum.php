<?php

function positive_sum(array $arr): int|float
{
    return array_sum(array_filter($arr, fn($num) => $num > 0));
}

function positiveSumLoop(array $arr): int|float
{
    $sum = 0;

    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }

    return $sum;
}

function positiveSumReduce(array $arr): int|float
{
    return array_reduce($arr, fn($sum, $num) => $num > 0 ? $sum + $num : $sum, 0);
}
