<?php

declare(strict_types=1);

/**
 * This function converts the
 * submitted Decimal Number to
 * Binary Number.
 *
 * @param  string  $decimalNumber
 * @throws \Exception
 */
function decimalToBinary($decimalNumber): string
{
	error_log(sprintf('[ERROR] >>> Entering decimalToBinary($decimalNumber=%s)', is_scalar($decimalNumber) ? $decimalNumber : gettype($decimalNumber)));
    if (!is_numeric($decimalNumber)) {
		error_log(sprintf('[ERROR] Throwing new from decimalToBinary($decimalNumber=%s)', is_scalar($decimalNumber) ? $decimalNumber : gettype($decimalNumber)));
        throw new \Exception('Please pass a valid Decimal Number for Converting it to a Binary Number.');
    }

    $binaryNumber = '';

    $decimalNumber = (int) $decimalNumber;

    while ($decimalNumber > 0) {
        $binaryNumber = ($decimalNumber % 2) . $binaryNumber;
        $decimalNumber = intdiv($decimalNumber, 2);
    }

	error_log(sprintf('[WARN] <<< Exiting decimalToBinary($decimalNumber=%s)', is_scalar($decimalNumber) ? $decimalNumber : gettype($decimalNumber)));
    return $binaryNumber;
}
