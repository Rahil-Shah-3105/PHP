<?php

declare(strict_types=1);

/**
 * This function returns a given sentence with its words
 * in reverse order
 */
function reverseWords(string $text): string
{
	error_log(sprintf('>>> Entering reverseWords($text=%s)', is_scalar($text) ? $text : gettype($text)));
    $text          = trim($text);
    $words         = explode(' ', $text);
    $reversedWords = [];

    for ($i = (count($words) - 1); $i >= 0; $i--) {
        $reversedWords[] = $words[$i];
    }

	error_log(sprintf('<<< Exiting reverseWords($text=%s)', is_scalar($text) ? $text : gettype($text)));
    return implode(' ', $reversedWords);
}
