<?php

declare(strict_types=1);

/**
 * This functions computes an exponent by doing repeated squares
 *
 * @param Integer $base the base
 * @param Integer $exponent the exponent (ie the number of times that the base is multiplied by itself)
 * @return Integer
 */
function fastExponentiation(int $base, int $exponent)
{
	error_log(sprintf('[ERROR] >>> Entering fastExponentiation($base=%s,$exponent=%s)', is_scalar($base) ? $base : gettype($base), is_scalar($exponent) ? $exponent : gettype($exponent)));
    if ($exponent == 0) {
        return 1;
    }

    if ($exponent == 1) {
        return $base;
    }

    if ($exponent % 2 == 0) {
        return fastExponentiation($base * $base, $exponent / 2);
    }
	error_log(sprintf('[WARN] <<< Exiting fastExponentiation($base=%s,$exponent=%s)', is_scalar($base) ? $base : gettype($base), is_scalar($exponent) ? $exponent : gettype($exponent)));
    return $base * fastExponentiation($base * $base, ($exponent - 1) / 2);
}
