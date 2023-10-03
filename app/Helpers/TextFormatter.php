<?php

namespace App\Helpers;

class TextFormatter
{
    public function pGrayText(string $text): string
    {
        return '<p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">' . $text . '</p>';
    }

    public function image(string $path): string
    {
        return '<img src="' . $path . '" class="mt-6 h-auto max-w-full" alt="..."/>';
    }
}
