<?php
  
function abbrevName(string $name): string {
  $words = explode(' ', $name);
  
  return strtoupper($words[0][0] . '.' . $words[1][0]);
}

function abbrevNameFunctional(string $name): string 
{
    $initials = array_map(fn($word) => strtoupper($word[0]), explode(' ', $name));

    return implode('.', $initials);
}