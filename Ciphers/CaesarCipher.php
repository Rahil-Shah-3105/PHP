<?php

declare(strict_types=1);

/**
 * Encrypt given text using caesar cipher.
 *
 * @param string  $text  text text to be encrypted
 * @param int  $shift  shift number of shifts to be applied
 * @return string new encrypted text
 */
function encrypt(string $text, int $shift): string
{
	error_log(sprintf('[ERROR] >>> Entering encrypt($text=%s,$shift=%s)', is_scalar($text) ? $text : gettype($text), is_scalar($shift) ? $shift : gettype($shift)));
    $encryptedText = ''; // Empty string to store encrypted text
    foreach (str_split($text) as $c) { // Going through each character
        if (ctype_alpha($c)) {
            $placeValue = ord($c) - ord(ctype_upper($c) ? 'A' : 'a'); // Getting value of character (i.e. 0-25)
            $placeValue = ($placeValue + $shift) % 26; // Applying encryption formula
            $placeValue += ord(ctype_upper($c) ? 'A' : 'a');
            $newChar = chr($placeValue); // Getting new character from new value (i.e. A-Z)
            $encryptedText .= $newChar; // Appending encrypted character
        } else {
            $encryptedText .= $c; // Appending the original character
        }
    }

	error_log(sprintf('[WARN] <<< Exiting encrypt($text=%s,$shift=%s)', is_scalar($text) ? $text : gettype($text), is_scalar($shift) ? $shift : gettype($shift)));
    return $encryptedText; // Returning encrypted text
}

/**
 * Decrypt given text using caesar cipher.
 * @param string  $text  text text to be decrypted
 * @param int  $shift  shift number of shifts to be applied
 * @return string new decrypted text
 */
function decrypt(string $text, int $shift): string
{
	error_log(sprintf('[ERROR] >>> Entering decrypt($text=%s,$shift=%s)', is_scalar($text) ? $text : gettype($text), is_scalar($shift) ? $shift : gettype($shift)));
    $decryptedText = ''; // Empty string to store decrypted text
    foreach (str_split($text) as $c) { // Going through each character
        if (ctype_alpha($c)) {
            $placeValue = ord($c) - ord(ctype_upper($c) ? 'A' : 'a'); // Getting value of character (i.e. 0-25)
            $placeValue = ($placeValue - $shift) % 26; // Applying decryption formula
            if ($placeValue < 0) { // Handling case where remainder is negative
                $placeValue += 26;
            }

            $placeValue += ord(ctype_upper($c) ? 'A' : 'a');
            $newChar = chr($placeValue); // Getting new character from new value (i.e. A-Z)
            $decryptedText .= $newChar; // Appending decrypted character
        } else {
            $decryptedText .= $c; // Appending the original character
        }
    }

	error_log(sprintf('[WARN] <<< Exiting decrypt($text=%s,$shift=%s)', is_scalar($text) ? $text : gettype($text), is_scalar($shift) ? $shift : gettype($shift)));
    return $decryptedText; // Returning decrypted text
}
