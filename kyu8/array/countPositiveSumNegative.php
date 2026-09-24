<?php

function countPositivesSumNegatives($input) {
  if(empty($input)) { 
    return [];
  }
  
  $positivesCount = 0;
  $negativesSum = 0;
  
  foreach ($input as $num) { 
    if ($num > 0) { 
      $positivesCount++;
    } elseif ($num < 0) { 
      $negativesSum += $num;
    }
  }
  
  return [$positivesCount, $negativesSum];
}

function countPositivesSumNegativesFunctional(?array $input): array {
    if (empty($input)) return [];

    return [
        count(array_filter($input, fn($n) => $n > 0)),
        array_sum(array_filter($input, fn($n) => $n < 0))
    ];
}