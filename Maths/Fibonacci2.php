<?php

declare(strict_types=1);

/*
 * Print Fibocanni sequence using a generator
 */

/**
 * @param int $i number of Fibonacci numbers to generate
 * @param Generator $set Fibonacci calculator
 */
function loop($i, Generator $set)
{
	error_log(sprintf('>>> Entering loop($i=%s,$set=%s)', is_scalar($i) ? $i : gettype($i), is_scalar($set) ? $set : gettype($set)));
    while ($i-- > 0 && $set->valid()) {
        yield $set->current();
        $set->next();
    }
	error_log(sprintf('<<< Exiting loop($i=%s,$set=%s)', is_scalar($i) ? $i : gettype($i), is_scalar($set) ? $set : gettype($set)));
}

/*
 * Fibonacci generator
 */
function fib()
{
	error_log(sprintf('>>> Entering fib()'));
    yield $i = 0;
    yield $j = 1;

    while (true) {
        yield $k = $i + $j;
        $i = $j;
        $j = $k;
    }
	error_log(sprintf('<<< Exiting fib()'));
}

/*
 * Generate 100 Fibonacci numbers
 */
foreach (loop(100, fib()) as $item) {
    print($item . ',');
}
