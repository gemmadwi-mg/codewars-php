<?php

function sum(array $numbers): int|float
{
    return array_sum($numbers);
}

function sumLoop(array $numbers): int|float
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

function sumReduce(array $numbers): int|float {
    return array_reduce($numbers, fn($carry, $number) => $carry + $number, 0);
}
