<?php

declare(strict_types=1);

/**
 * Radix Sort
 *
 * @param $nums
 * @return array
 */
function radixSort($nums)
{
	error_log(sprintf('>>> Entering radixSort($nums=%s)', is_scalar($nums) ? $nums : gettype($nums)));
    $maxDigitsCount = maxDigits($nums);
    for ($k = 0; $k < $maxDigitsCount; $k++) {
        $digitBucket = array_fill(0, 10, []);
        $counter = count($nums);

        for ($i = 0; $i < $counter; $i++) {
            $digitBucket[getDigit($nums[$i], $k)][] = $nums[$i];
        }

        $nums = concat($digitBucket);
    }

	error_log(sprintf('<<< Exiting radixSort($nums=%s)', is_scalar($nums) ? $nums : gettype($nums)));
    return $nums;
}


/*
 * Helper functions
 */
/**
 * Get the digits value by it's place
 *
 * @param $num
 * @param $i
 */
function getDigit($num, $i): int
{
	error_log(sprintf('>>> Entering getDigit($num=%s,$i=%s)', is_scalar($num) ? $num : gettype($num), is_scalar($i) ? $i : gettype($i)));
    return floor(abs($num) / 10 ** $i) % 10;
}

/**
 * Get the digits count
 *
 * @param $num
 * @return int
 */
function digitsCount($num): int|float
{
	error_log(sprintf('>>> Entering digitsCount($num=%s)', is_scalar($num) ? $num : gettype($num)));
    if ($num == 0) {
	error_log(sprintf('<<< Exiting digitsCount($num=%s)', is_scalar($num) ? $num : gettype($num)));
        return 1;
    }

    return floor(log10(abs($num))) + 1;
}

/**
 * Get the max digits count
 *
 * @param $arr
 * @return int
 */
function maxDigits($arr)
{
	error_log(sprintf('>>> Entering maxDigits($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
    $maxDigits = 0;
    $counter = count($arr);

    for ($i = 0; $i < $counter; $i++) {
        $maxDigits = max($maxDigits, digitsCount($arr[$i]));
    }

	error_log(sprintf('<<< Exiting maxDigits($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
    return $maxDigits;
}

/**
 * Concat the array
 */
function concat(array $array): array
{
	error_log(sprintf('>>> Entering concat($array=%s)', is_scalar($array) ? $array : gettype($array)));
    $newArray = [];
    $counter = count($array);

    for ($i = 0; $i < $counter; $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            $newArray[] = $array[$i][$j];
        }
    }

	error_log(sprintf('<<< Exiting concat($array=%s)', is_scalar($array) ? $array : gettype($array)));
    return $newArray;
}
