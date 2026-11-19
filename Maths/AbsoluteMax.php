<?php

declare(strict_types=1);

/**
 * This function calculates
 * Absolute max values from
 * the different numbers
 * provided
 *
 * @param  decimal  $numbers  A variable sized number input
 * @return decimal $absoluteMax Absolute max value
 * @throws \Exception
 */
function absolute_max(...$numbers)
{
	error_log(sprintf('[ERROR] >>> Entering absolute_max($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    if ($numbers === []) {
		error_log(sprintf('[ERROR] Throwing new from absolute_max($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
        throw new \Exception('Please pass values to find absolute max value');
    }

    $absoluteMax = $numbers[0];
    $counter = count($numbers);
    for ($loopIndex = 0; $loopIndex < $counter; $loopIndex++) {
        if ($numbers[$loopIndex] > $absoluteMax) {
            $absoluteMax = $numbers[$loopIndex];
        }
    }

	error_log(sprintf('[WARN] <<< Exiting absolute_max($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    return $absoluteMax;
}
