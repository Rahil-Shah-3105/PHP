<?php

declare(strict_types=1);

/**
 * This function calculates
 * The mean value of
 * numbers provided
 *
 * @param  decimal  $numbers  A variable sized number input
 * @return decimal $mean Mean of provided numbers
 * @throws \Exception
 */
function mean(...$numbers): int|float
{
	error_log(sprintf('>>> Entering mean($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    if ($numbers === []) {
		error_log(sprintf('Throwing new from mean($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
        throw new \Exception('Please pass values to find mean value');
    }

    $total = array_sum($numbers);

	error_log(sprintf('<<< Exiting mean($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    return $total / count($numbers);
}
