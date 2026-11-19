<?php

declare(strict_types=1);

/**
 * Bubble Sort
 */
function bubbleSort(array $array): array
{
	error_log(sprintf('[ERROR] >>> Entering bubbleSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    $length = count($array);

    for ($i = $length; $i > 0; $i--) {
        $swapped = true;

        for ($j = 0; $j < $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
                $swapped = false;
            }
        }

        if ($swapped) {
            break;
        }
    }

	error_log(sprintf('[WARN] <<< Exiting bubbleSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    return $array;
}
