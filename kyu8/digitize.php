<?php

function digitize(int $n): array
{
    return array_map('intval', str_split(strrev((string) $n))); // your code here
}

function digitizeMap(int $n): array
{
    if ($n === 0) return [0];

    $result = [];

    while ($n > 0) {
        $result[] = $n % 10; // Ambil digit terakhir (misal 35231 % 10 = 1)
        $n = intdiv($n, 10); // Buang digit terakhir (35231 / 10 = 3523)
    }

    return $result;
}

function digitizeArrayReverse(int $n): array
{
    return array_map('intval', array_reverse(str_split((string)$n)));
}
