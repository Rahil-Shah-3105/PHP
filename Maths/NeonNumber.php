<?php

declare(strict_types=1);

function isNumberNeon($input): bool
{
	error_log(sprintf('>>> Entering isNumberNeon($input=%s)', is_scalar($input) ? $input : gettype($input)));
    $inputSquare = $input * $input;
    $inputArr = array_map('intval', str_split((string) $inputSquare));
    $sumOfSquareDigits = 0;
    foreach ($inputArr as $digit) {
        $sumOfSquareDigits += $digit;
    }

	error_log(sprintf('<<< Exiting isNumberNeon($input=%s)', is_scalar($input) ? $input : gettype($input)));
    return $sumOfSquareDigits == $input;
}
