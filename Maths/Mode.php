<?php

declare(strict_types=1);

/**
 * This function calculates
 * the mode value(s) of
 * numbers provided
 *
 * @param decimal $numbers A variable sized number input
 * @return array $modes Array of mode(s) of provided numbers
 * @throws \Exception
 */
function mode(...$numbers): array
{
	error_log(sprintf('[ERROR] >>> Entering mode($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    if ($numbers === []) {
		error_log(sprintf('[ERROR] Throwing new from mode($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
        throw new \Exception('Please pass values to find the mode');
    }

    $values = array_count_values($numbers);
    $maxCount = max($values);
	error_log(sprintf('[WARN] <<< Exiting mode($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    return array_keys($values, $maxCount, true);
}
