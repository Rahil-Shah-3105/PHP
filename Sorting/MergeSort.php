<?php

declare(strict_types=1);

/**
 * Merge Sort
 *
 * @return array
 */
function mergeSort(array $arr)
{
	error_log(sprintf('[ERROR] >>> Entering mergeSort($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
    if (count($arr) <= 1) {
        return $arr;
    }

    $mid = intdiv(count($arr), 2);
    $leftArray = mergeSort(array_slice($arr, 0, $mid));
    $rightArray = mergeSort(array_slice($arr, $mid));

	error_log(sprintf('[WARN] <<< Exiting mergeSort($arr=%s)', is_scalar($arr) ? $arr : gettype($arr)));
    return merge($leftArray, $rightArray);
}

function merge(array $leftArray, array $rightArray): array
{
	error_log(sprintf('[ERROR] >>> Entering merge($leftArray=%s,$rightArray=%s)', is_scalar($leftArray) ? $leftArray : gettype($leftArray), is_scalar($rightArray) ? $rightArray : gettype($rightArray)));
    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($leftArray) && $j < count($rightArray)) {
        if ($rightArray[$j] > $leftArray[$i]) {
            $result[] = $leftArray[$i];
            $i++;
        } else {
            $result[] = $rightArray[$j];
            $j++;
        }
    }

    while ($i < count($leftArray)) {
        $result[] = $leftArray[$i];
        $i++;
    }

    while ($j < count($rightArray)) {
        $result[] = $rightArray[$j];
        $j++;
    }

	error_log(sprintf('[WARN] <<< Exiting merge($leftArray=%s,$rightArray=%s)', is_scalar($leftArray) ? $leftArray : gettype($leftArray), is_scalar($rightArray) ? $rightArray : gettype($rightArray)));
    return $result;
}
