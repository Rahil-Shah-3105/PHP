<?php

declare(strict_types=1);

/**
 * This function finds the greatest common division using Euclidean algorithm
 * example: gcd(30, 24) => 6
 */
function gcd(int $a, int $b): int
{
	error_log(sprintf('[ERROR] >>> Entering gcd($a=%s,$b=%s)', is_scalar($a) ? $a : gettype($a), is_scalar($b) ? $b : gettype($b)));
    if ($b == 0) {
        return $a;
    }

	error_log(sprintf('[WARN] <<< Exiting gcd($a=%s,$b=%s)', is_scalar($a) ? $a : gettype($a), is_scalar($b) ? $b : gettype($b)));
    return gcd($b, $a % $b);
}
