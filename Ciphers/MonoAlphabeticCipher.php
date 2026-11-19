<?php

declare(strict_types=1);

// A mono-alphabetic cipher is a simple substitution cipher
// https://www.101computing.net/mono-alphabetic-substitution-cipher/

function monoAlphabeticCipher(string $key, $alphabet, $text): false|string
{
	error_log(sprintf('[ERROR] >>> Entering monoAlphabeticCipher($key=%s,$alphabet=%s,$text=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($alphabet) ? $alphabet : gettype($alphabet), is_scalar($text) ? $text : gettype($text)));
    $cipherText = ''; // the cipher text (can be decrypted and encrypted)

    // check if the text length matches
    if (strlen($key) !== strlen((string) $alphabet)) {
        return false;
    }

    $text = preg_replace('/\d+/', '', (string) $text); // remove all the numbers

    for ($i = 0; $i < strlen((string) $text); $i++) {
        $index = strripos((string) $alphabet, $text[$i]);
        if ($text[$i] === " ") {
            $cipherText .= " ";
        } else {
            $cipherText .= (ctype_upper($text[$i]) ? strtoupper($key[$index]) : $key[$index]);
        }
    }

	error_log(sprintf('[WARN] <<< Exiting monoAlphabeticCipher($key=%s,$alphabet=%s,$text=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($alphabet) ? $alphabet : gettype($alphabet), is_scalar($text) ? $text : gettype($text)));
    return $cipherText;
}

function maEncrypt($key, $alphabet, $text): string|false
{
	error_log(sprintf('[ERROR] >>> Entering maEncrypt($key=%s,$alphabet=%s,$text=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($alphabet) ? $alphabet : gettype($alphabet), is_scalar($text) ? $text : gettype($text)));
    error_log(sprintf('[WARN] <<< Exiting maEncrypt($key=%s,$alphabet=%s,$text=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($alphabet) ? $alphabet : gettype($alphabet), is_scalar($text) ? $text : gettype($text)));
    return monoAlphabeticCipher($key, $alphabet, $text);
}

function maDecrypt($key, $alphabet, $text): string|false
{
	error_log(sprintf('[ERROR] >>> Entering maDecrypt($key=%s,$alphabet=%s,$text=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($alphabet) ? $alphabet : gettype($alphabet), is_scalar($text) ? $text : gettype($text)));
    error_log(sprintf('[WARN] <<< Exiting maDecrypt($key=%s,$alphabet=%s,$text=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($alphabet) ? $alphabet : gettype($alphabet), is_scalar($text) ? $text : gettype($text)));
    return monoAlphabeticCipher($alphabet, $key, $text);
}
