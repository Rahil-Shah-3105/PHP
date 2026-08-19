<?php

declare(strict_types=1);

/**
 * This is a simple way to check palindrome string
 * using php strrev() function
 * make it simple
 *
 * @throws \Exception
 */
function checkPalindromeString(string $string, bool $caseInsensitive = true): string
{
	error_log(sprintf('>>> Entering checkPalindromeString($string=%s,$caseInsensitive=%s)', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
    //removing spaces
    $string = trim($string);

    if ($string === '' || $string === '0') {
		error_log(sprintf('Throwing new from checkPalindromeString($string=%s,$caseInsensitive=%s)', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
        throw new \Exception('You are given empty string. Please give a non-empty string value');
    }

    /**
     * for case-insensitive
     * lowercase string conversion
     */
    if ($caseInsensitive) {
        $string = strtolower($string);
    }

    if ($string !== strrev($string)) {
	error_log(sprintf('<<< Exiting checkPalindromeString($string=%s,$caseInsensitive=%s)', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
        return $string . " - not a palindrome string." . PHP_EOL;
    }

    return $string . " - a palindrome string." . PHP_EOL;
}
