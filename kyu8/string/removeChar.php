<?php
  
function remove_char(string $s): string {
  return substr($s, 1, -1); // Write your code here
}

function removeCharArray(string $s): string {
    $arr = str_split($s);
    array_shift($arr); // Hapus elemen pertama
    array_pop($arr);   // Hapus elemen terakhir
    return implode('', $arr);
}