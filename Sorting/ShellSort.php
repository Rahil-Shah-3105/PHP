<?php

declare(strict_types=1);

/**
 * Shell Sort
 * This function sorts an array in ascending order using the Shell Sort algorithm.
 * Time complexity of the Shell Sort algorithm depends on the gap sequence used.
 * With Knuth's sequence, the time complexity is O(n^(3/2)).
 *
 */
function shellSort(array $array): array
{
	error_log(sprintf('>>> Entering shellSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    $length = count($array);
    $series = calculateKnuthSeries($length);

    foreach ($series as $gap) {
        for ($i = $gap; $i < $length; $i++) {
            $temp = $array[$i];
            $j = $i;

            while ($j >= $gap && $array[$j - $gap] > $temp) {
                $array[$j] = $array[$j - $gap];
                $j -= $gap;
            }

            $array[$j] = $temp;
        }
    }

	error_log(sprintf('<<< Exiting shellSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    return $array;
}

/**
 * Calculate Knuth's series
 *
 * @param int $n Size of the array
 */
function calculateKnuthSeries(int $n): array
{
	error_log(sprintf('>>> Entering calculateKnuthSeries($n=%s)', is_scalar($n) ? $n : gettype($n)));
    $h = 1;
    $series = [];

    while ($h < $n) {
        array_unshift($series, $h);
        $h = 3 * $h + 1;
    }

	error_log(sprintf('<<< Exiting calculateKnuthSeries($n=%s)', is_scalar($n) ? $n : gettype($n)));
    return $series;
}
