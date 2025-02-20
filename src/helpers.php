<?php

use Illuminate\Support\Str;

if (!function_exists('word_limit')) {
    function word_limit($string, $limit = null, $end = null)
    {
        $limit = $limit ?? config('wordlimit.default_limit', 100);
        $end = $end ?? config('wordlimit.default_end', '...');
        
        return Str::words($string, $limit, $end);
    }
}

