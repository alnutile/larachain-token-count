<?php

namespace SundanceSolutions\LarachainTokenCount;

class LarachainTokenCount
{
    public function count(string $text): int
    {
        /**
         * Per ChatGPT suggestion 🙏
         */
        $words = preg_split('/\s+/', $text);
        $wordCount = count($words);
        $spaceCount = substr_count($text, ' ');
        $punctuationCount = substr_count($text, '.');

        return $wordCount + $spaceCount + $punctuationCount;
    }
}
