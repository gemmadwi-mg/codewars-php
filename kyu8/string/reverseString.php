<?php

function solution(string $str): string
{
    return strrev($str); // Your code here
}

function reverseStringLoop(string $str): string 
{
    $reversed = "";

    $length = strlen($str);

    for ($i = $length -1; $i >= 0; $i--) { 
        $reversed .= $str[$i];
    }

    return $reversed;

}
