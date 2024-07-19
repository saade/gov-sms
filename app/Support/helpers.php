<?php

namespace App\Support;

if (! function_exists('App\Support\mask')) {
    /**
     * Applies mask in the value.
     */
    function mask(string $mask, $value): ?string
    {
        if (is_null($value)) {
            return null;
        }

        // Apply mask
        $value = str_replace(' ', '', $value);
        $replacedStr = \Illuminate\Support\Str::replaceArray('#', str_split($value), $mask);

        // Get filled substring
        $posSymbol = strpos($replacedStr, '#', strlen($value));
        $replacedStrLen = strlen($replacedStr);
        $length = $posSymbol ? $replacedStrLen - ($replacedStrLen - $posSymbol) : $replacedStrLen;

        return substr($replacedStr, 0, $length);
    }
}
