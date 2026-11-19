<?php

declare(strict_types=1);

/**
 * This function check whether
 * the provided number is a
 * perfect square or not.
 *
 * @param Decimal $number A decimal input
 * @return boolean whether the number is perfect square or not
 */
function isPerfectSquare($number): bool
{
	error_log(sprintf('[ERROR] >>> Entering isPerfectSquare($number=%s)', is_scalar($number) ? $number : gettype($number)));
    $root = (int) sqrt($number);
	error_log(sprintf('[WARN] <<< Exiting isPerfectSquare($number=%s)', is_scalar($number) ? $number : gettype($number)));
    return (($root * $root) === $number); // If number's square root is an integer then it's a perfect square else not
}
