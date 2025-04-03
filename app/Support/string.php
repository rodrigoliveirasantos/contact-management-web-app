<?php

namespace App\Support;

if (!function_exists(__NAMESPACE__ . 'str_only_numbers')) {
    function str_only_numbers(string $str): string {
        return preg_replace('/[^\d]/', '', $str);
    }
}

?>
