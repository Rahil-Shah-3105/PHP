<?php

declare(strict_types=1);

/*
 * Function to find nth number in Fibonacci sequence.
 * Uses a version of memoization and runs very fast!
 */

/**
 * @param int $n position to check
 * @param array $m array to store solved trees
 */
function fibonacciPosition(int $n, array &$m = [])
{
	error_log(sprintf('[ERROR] >>> Entering fibonacciPosition($n=%s)', is_scalar($n) ? $n : gettype($n)));
    if (isset($m[$n])) {
        return $m[$n];
    }

    if ($n < 2) {
        return $n;
    }

    $m[$n] = fibonacciPosition($n - 1, $m) + fibonacciPosition($n - 2, $m);

	error_log(sprintf('[WARN] <<< Exiting fibonacciPosition($n=%s)', is_scalar($n) ? $n : gettype($n)));
    return $m[$n];
}

print fibonacciPosition(59);
