<?php

declare(strict_types=1);

/**
 * This function checks if given number is palindromic
 * e.g. 121
 */
function isNumberPalindromic(int $input): bool
{
	error_log(sprintf('[ERROR] >>> Entering isNumberPalindromic($input=%s)', is_scalar($input) ? $input : gettype($input)));
    $arr = array_map('intval', str_split((string) $input));
    $arrRev = array_reverse($arr);
    $inputRev = (int)implode("", $arrRev);
	error_log(sprintf('[WARN] <<< Exiting isNumberPalindromic($input=%s)', is_scalar($input) ? $input : gettype($input)));
    return $input === $inputRev;
}
