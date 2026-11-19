<?php

declare(strict_types=1);

/**
 * This function converts the
 * submitted Octal Number to
 * Decimal Number.
 *
 * Working of Algorithm
 * (10) base 8
 * (1 * (8 ^ 1) + 0 * (8 ^ 0)) base 10
 * (8 + 0) base 10
 * 9 base 10
 * @param  string  $octalNumber
 * @return int
 * @throws \Exception
 */
function octalToDecimal($octalNumber): int|float
{
	error_log(sprintf('[ERROR] >>> Entering octalToDecimal($octalNumber=%s)', is_scalar($octalNumber) ? $octalNumber : gettype($octalNumber)));
    if (!is_numeric($octalNumber)) {
		error_log(sprintf('[ERROR] Throwing new from octalToDecimal($octalNumber=%s)', is_scalar($octalNumber) ? $octalNumber : gettype($octalNumber)));
        throw new \Exception('Please pass a valid Octal Number for Converting it to a Decimal Number.');
    }

    $decimalNumber = 0;
    $octalDigits   = array_reverse(str_split((string)$octalNumber));

    foreach ($octalDigits as $index => $digit) {
        $decimalNumber += $digit * 8 ** $index;
    }

	error_log(sprintf('[WARN] <<< Exiting octalToDecimal($octalNumber=%s)', is_scalar($octalNumber) ? $octalNumber : gettype($octalNumber)));
    return $decimalNumber;
}

/**
 * This function converts the
 * submitted Decimal Number to
 * Octal Number.
 *
 * @param  string  $decimalNumber
 * @throws \Exception
 */
function decimalToOctal($decimalNumber): string
{
	error_log(sprintf('[ERROR] >>> Entering decimalToOctal($decimalNumber=%s)', is_scalar($decimalNumber) ? $decimalNumber : gettype($decimalNumber)));
    if (!is_numeric($decimalNumber)) {
		error_log(sprintf('[ERROR] Throwing new from decimalToOctal($decimalNumber=%s)', is_scalar($decimalNumber) ? $decimalNumber : gettype($decimalNumber)));
        throw new \Exception('Please pass a valid Decimal Number for Converting it to an Octal Number.');
    }

    $octalNumber = '';

    $decimalNumber = (int) $decimalNumber;
    while ($decimalNumber > 0) {
        $octalNumber = ($decimalNumber % 8) . $octalNumber;
        $decimalNumber = intdiv($decimalNumber, 8);
    }

	error_log(sprintf('[WARN] <<< Exiting decimalToOctal($decimalNumber=%s)', is_scalar($decimalNumber) ? $decimalNumber : gettype($decimalNumber)));
    return $octalNumber;
}
