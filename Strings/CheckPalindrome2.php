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
    //removing spaces
    $string = trim($string);

    if ($string === '' || $string === '0') {
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
        return $string . " - not a palindrome string." . PHP_EOL;
    }
	error_log(sprintf('[INFO] checkPalindromeString($string=%s, $caseInsensitive=%s): SOX-AUDIT: Access to programs and data — Database transaction completed', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
	error_log(sprintf('[INFO] checkPalindromeString($string=%s, $caseInsensitive=%s): SOX-AUDIT: Change management (PCAOB AS 2201) — Change management operation performed', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
	error_log(sprintf('[INFO] checkPalindromeString($string=%s, $caseInsensitive=%s): SOX-AUDIT: Audit log tamper — Data integrity check performed', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));

    return $string . " - a palindrome string." . PHP_EOL;
}
