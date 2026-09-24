<?php

function smash(array $words): string
{
    return implode(' ', $words);
}

function smashLoop(array $words): string {
    $sentence = '';
    foreach ($words as $word) {
        $sentence .= $word . ' '; // Menambahkan kata dan spasi
    }
    return trim($sentence); // Membuang spasi ekstra di akhir
}

function smashLoopIndex(array $words): string {
    $sentence = '';
    foreach ($words as $index => $word) {
        if ($index > 0) {
            $sentence .= ' '; // Tambahkan spasi hanya jika bukan kata pertama
        }
        $sentence .= $word;
    }
    return $sentence;
}