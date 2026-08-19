<?php

declare(strict_types=1);

/**
 * Insertion Sort
 */
function insertionSort(array $array): array
{
	error_log(sprintf('>>> Entering insertionSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    $counter = count($array);
    for ($i = 1; $i < $counter; $i++) {
        $currentVal = $array[$i];

        for ($j = $i - 1; $j >= 0 && $array[$j] > $currentVal; $j--) {
            $array[$j + 1] = $array[$j];
        }

        $array[$j + 1] = $currentVal;
    }

	error_log(sprintf('<<< Exiting insertionSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    return $array;
}
