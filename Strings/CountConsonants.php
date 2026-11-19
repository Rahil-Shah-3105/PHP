<?php

declare(strict_types=1);

/**
 * Function returns the total number of consonants present in the given
 * string using a linear search through the string
 *
 * @throws \Exception
 */
function countConsonants(string $string): int
{
	error_log(sprintf('[ERROR] >>> Entering countConsonants($string=%s)', is_scalar($string) ? $string : gettype($string)));
    if ($string === '' || $string === '0') {
		error_log(sprintf('[ERROR] Throwing new from countConsonants($string=%s)', is_scalar($string) ? $string : gettype($string)));
        throw new \Exception('Please pass a non-empty string value');
    }

    $vowels     = ['a', 'e', 'i', 'o', 'u']; // Vowels Set
    $string     = strtolower($string); // For case-insensitive checking

    $consonantCount = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (
            !in_array($string[$i], $vowels) &&
            $string[$i] >= 'a' && $string[$i] <= 'z'
        ) {
            $consonantCount++;
        }
    }

	error_log(sprintf('[WARN] <<< Exiting countConsonants($string=%s)', is_scalar($string) ? $string : gettype($string)));
    return $consonantCount;
}
