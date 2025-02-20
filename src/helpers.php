<?php

use Illuminate\Support\Str;

if (!function_exists('word_limit')) {
    function word_limit($string, $limit = null, $end = null)
    {
        $limit = $limit ?? config('wordlimit.default_limit', 100);
        $end = $end ?? config('wordlimit.default_end', '...');
        
        $words = str_word_count($string, 2);
        if (count($words) <= $limit) {
            return $string;
        }
        
        return implode(' ', array_slice($words, 0, $limit)) . $end;
    }
}
