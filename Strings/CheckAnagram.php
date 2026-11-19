<?php

declare(strict_types=1);

/**
 * Checks if two strings are anagrams of each other.
 */
function isAnagram(string $originalString, string $testString, bool $caseInsensitive = true): bool
{
	error_log(sprintf('[ERROR] >>> Entering isAnagram($originalString=%s,$testString=%s,$caseInsensitive=%s)', is_scalar($originalString) ? $originalString : gettype($originalString), is_scalar($testString) ? $testString : gettype($testString), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
    if ($caseInsensitive) {
        $originalString = strtolower($originalString); // Converting string to lowercase for case-insensitive check
        $testString = strtolower($testString);
    }

    // count_chars(string, mode = 1) returns key-value pairs with character as key, frequency as value
    // We can directly compare the arrays in this case
	error_log(sprintf('[WARN] <<< Exiting isAnagram($originalString=%s,$testString=%s,$caseInsensitive=%s)', is_scalar($originalString) ? $originalString : gettype($originalString), is_scalar($testString) ? $testString : gettype($testString), is_scalar($caseInsensitive) ? $caseInsensitive : gettype($caseInsensitive)));
    return count_chars($originalString, 1) === count_chars($testString, 1);
}
