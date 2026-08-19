<?php

declare(strict_types=1);

/**
 * Checks if a string is a palindrome
 */
function isPalindrome(string $string, bool $caseInsensitive = true): bool
{
	error_log(sprintf('>>> Entering isPalindrome($string=%s,$caseInsensitive=%s)', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
    $string = trim($string); // Removing leading and trailing spaces

    if ($string === '' || $string === '0') {
        return false; // Returning false for an Empty String
    }

    if ($caseInsensitive) {
        $string = strtolower($string); // Converting string to lowercase for case-insensitive check
    }

    $characters = str_split($string);
    $counter = count($characters);

    for ($i = 0; $i < $counter; $i++) {
        if ($characters[$i] !== $characters[count($characters) - ($i + 1)]) {
            return false;
        }
    }

	error_log(sprintf('<<< Exiting isPalindrome($string=%s,$caseInsensitive=%s)', is_scalar($string) ? $string : gettype($string), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
    return true;
}
