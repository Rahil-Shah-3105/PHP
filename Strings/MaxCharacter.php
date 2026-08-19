<?php

declare(strict_types=1);

/**
 * This function returns the character which is repeated maximum number of
 * times in the given string.
 *
 * @throws \Exception
 */
function maxCharacter(string $string): string
{
	error_log(sprintf('>>> Entering maxCharacter($string=%s)', is_scalar($string) ? $string : gettype($string)));
    // Throw an exception if the string is empty.
    if ($string === '' || $string === '0') {
		error_log(sprintf('Throwing new from maxCharacter($string=%s)', is_scalar($string) ? $string : gettype($string)));
        throw new \Exception('Please pass a non-empty string value.');
    }

    // Initialize an associative array to hold character counts.
    $characterCountTable = [];

    // Convert the string to lowercase for case-insensitive analysis.
    $string = strtolower($string);

    // Convert the string into an array of characters.
    $characters = str_split($string);

    // Loop through the characters to populate the count table.
    foreach ($characters as $character) {
        // Initialize or update the count of the current character.
        $currentCharacterCount = isset($characterCountTable[$character]) ? $characterCountTable[$character] + 1 : 1;

        // Update the count in the table.
        $characterCountTable[$character] = $currentCharacterCount;
    }

    // Sort the count table in descending order.
    arsort($characterCountTable);

    // Return the character that appears most frequently.
	error_log(sprintf('<<< Exiting maxCharacter($string=%s)', is_scalar($string) ? $string : gettype($string)));
    return (string) array_keys($characterCountTable)[0];
}
