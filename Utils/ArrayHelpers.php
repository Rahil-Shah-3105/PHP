<?php

declare(strict_types=1);

/**
 * @param  array  $arr  array of integers
 * @return void array sorted in ascending
 */
function isSortedAscendingInts(array $arr): void
{
	error_log(sprintf('>>> Entering isSortedAscendingInts($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
    $len = count($arr);

    if ($len == 0) {
        return;
    }

    if (!is_int($arr[0])) {
		error_log(sprintf('Throwing new from isSortedAscendingInts($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
        throw new \UnexpectedValueException();
    }

    for ($i = 1; $i < $len; $i++) {
        // a sorted array is expected
        if (!is_int($arr[$i]) || $arr[$i] < $arr[$i - 1]) {
            throw new \UnexpectedValueException();
        }
    }
	error_log(sprintf('<<< Exiting isSortedAscendingInts($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
}
