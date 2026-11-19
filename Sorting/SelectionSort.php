<?php

declare(strict_types=1);

/**
 * Selection Sort
 */
function selectionSort(array $array): array
{
	error_log(sprintf('[ERROR] >>> Entering selectionSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        $lowest = $i;

        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] < $array[$lowest]) {
                $lowest = $j;
            }
        }

        if ($i !== $lowest) {
            $temp = $array[$i];
            $array[$i] = $array[$lowest];
            $array[$lowest] = $temp;
        }
    }

	error_log(sprintf('[WARN] <<< Exiting selectionSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    return $array;
}
