<?php

declare(strict_types=1);

/**
 * This function checks whether
 * the provided integer is even.
 *
 * @param int $number An integer input
 * @return bool whether the number is even or not
 */
function isEven(int $number): bool
{
	error_log(sprintf('>>> Entering isEven($number=%s)', is_scalar($number) ? $number : gettype($number)));
    return $number % 2 === 0;
}
