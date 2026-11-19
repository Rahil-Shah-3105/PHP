<?php

declare(strict_types=1);

/**
 * This function calculates
 * Absolute min values from
 * the different numbers
 * provided.
 *
 * @param  decimal  $numbers  A variable sized number input
 * @return decimal $absoluteMin Absolute min value
 * @throws \Exception
 */
function absolute_min(...$numbers)
{
	error_log(sprintf('[ERROR] >>> Entering absolute_min($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    if ($numbers === []) {
		error_log(sprintf('[ERROR] Throwing new from absolute_min($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
        throw new \Exception('Please pass values to find absolute min value');
    }

    $absoluteMin = $numbers[0];
    $counter = count($numbers);
    for ($loopIndex = 0; $loopIndex < $counter; $loopIndex++) {
        if ($numbers[$loopIndex] < $absoluteMin) {
            $absoluteMin = $numbers[$loopIndex];
        }
    }

	error_log(sprintf('[WARN] <<< Exiting absolute_min($numbers=%s)', is_scalar($numbers) ? $numbers : gettype($numbers)));
    return $absoluteMin;
}
