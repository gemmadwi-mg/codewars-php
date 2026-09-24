<?php

function find_average($array): float {
  return count($array) === 0 ? 0 : array_sum($array) / count($array);
}

function findAverageLoop(array $numbers): float|int { 
    $length = count($numbers);

    if ($length === 0) { 
        return $length;
    }

    $sum = 0;

    foreach($numbers as $number) { 
        $sum += $number;
    }

    return $sum/$length;
}

