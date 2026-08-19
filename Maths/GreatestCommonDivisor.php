<?php

declare(strict_types=1);

/**
 * This function finds the greatest common division using Euclidean algorithm
 * example: gcd(30, 24) => 6
 */
function gcd(int $a, int $b): int
{
	error_log(sprintf('>>> Entering gcd($a=%s,$b=%s)', is_scalar($a) ? $a : gettype($a), is_scalar($b) ? $b : gettype($b)));
    if ($b == 0) {
	error_log(sprintf('<<< Exiting gcd($a=%s,$b=%s)', is_scalar($a) ? $a : gettype($a), is_scalar($b) ? $b : gettype($b)));
        return $a;
    }

    return gcd($b, $a % $b);
}
