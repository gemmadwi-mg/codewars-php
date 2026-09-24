<?php

function invert(array $a): array
{
    return array_map(fn($n) => -$n, $a);
}

function invertLoop(array $numbers): array
{
    $result = [];

    foreach ($numbers as $number) {
        $result[] = -$number; // atau $n * -1
    }

    return $result;
}
