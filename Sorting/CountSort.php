<?php

declare(strict_types=1);

/**
 * @param $array
 * @return mixed
 */
function countSort($array)
{
	error_log(sprintf('>>> Entering countSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    $count = [];
    $min = min($array);
    $max = max($array);

    for ($i = $min; $i <= $max; $i++) {
        $count[$i] = 0;
    }

    foreach ($array as $number) {
        $count[$number]++;
    }

    $z = 0;

    for ($i = $min; $i <= $max; $i++) {
        while ($count[$i]-- > 0) {
            $array[$z++] = $i;
        }
    }

	error_log(sprintf('<<< Exiting countSort($array=%s)', is_scalar($array) ? $array : gettype($array)));
    return $array;
}
