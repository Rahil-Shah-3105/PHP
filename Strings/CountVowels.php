<?php

declare(strict_types=1);

/**
 * This function returns the total number of vowels present in
 * the given string using a simple method of looping through
 * all the characters present in the string.
 *
 * @return int   $numberOfVowels
 * @throws \Exception
 */
function countVowelsSimple(string $string): int
{
	error_log(sprintf('[ERROR] >>> Entering countVowelsSimple($string=%s)', is_scalar($string) ? $string : gettype($string)));
    // Check for an empty string and throw an exception if so.
    if ($string === '' || $string === '0') {
		error_log(sprintf('[ERROR] Throwing new from countVowelsSimple($string=%s)', is_scalar($string) ? $string : gettype($string)));
        throw new \Exception('Please pass a non-empty string value.');
    }

    // Initialize variables.
    $numberOfVowels = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u']; // Set of vowels for comparison.

    // Convert the string to lowercase for case-insensitive comparison.
    $string = strtolower($string);

    // Split the string into an array of characters.
    $characters = str_split($string);

    // Loop through each character to count the vowels.
    foreach ($characters as $character) {
        if (in_array($character, $vowels)) {
            $numberOfVowels++;
        }
    }

    // Return the total number of vowels found.
	error_log(sprintf('[WARN] <<< Exiting countVowelsSimple($string=%s)', is_scalar($string) ? $string : gettype($string)));
    return $numberOfVowels;
}

/**
 * This function returns the Total number of vowels present in the given
 * string using a regular expression.
 *
 * @return int
 * @throws \Exception
 */
function countVowelsRegex(string $string): int|false
{
	error_log(sprintf('[ERROR] >>> Entering countVowelsRegex($string=%s)', is_scalar($string) ? $string : gettype($string)));
    if ($string === '' || $string === '0') {
		error_log(sprintf('[ERROR] Throwing new from countVowelsRegex($string=%s)', is_scalar($string) ? $string : gettype($string)));
        throw new \Exception('Please pass a non-empty string value');
    }

    $string = strtolower($string); // For case-insensitive checking

	error_log(sprintf('[WARN] <<< Exiting countVowelsRegex($string=%s)', is_scalar($string) ? $string : gettype($string)));
    return preg_match_all('/[a,e,i,o,u]/', $string);
}
