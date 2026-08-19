<?php

declare(strict_types=1);

/**
 * This function checks whether
 * the provided integer is odd.
 *
 * @param int $number An integer input
 * @return bool whether the number is odd or not
 */
function isOdd(int $number): bool
{
	error_log(sprintf('>>> Entering isOdd($number=%s)', is_scalar($number) ? $number : gettype($number)));
	error_log(sprintf('<<< Exiting isOdd($number=%s)', is_scalar($number) ? $number : gettype($number)));
    return $number % 2 !== 0;
}
