<?php

use Illuminate\Support\Str;

if (!function_exists('word_limit')) {
    function word_limit($string, $limit = 100, $end = '...')
    {
        return Str::limit($string, $limit, $end);
    }
}
