<?php

function square_sum(array $numbers): int
{
    return array_sum(array_map(fn($item) => $item ** 2, $numbers)); // Write your code here...
}

function squareSumLoop(array $numbers): int
{
    $sum = 0;

    foreach ($numbers as $n) {
        $sum += $n ** 2;
    }

    return $sum;
}

function squareSumReduce(array $numbers): int
{
    return array_reduce($numbers, fn($carry, $item) => $carry + ($item ** 2), 0);
}
