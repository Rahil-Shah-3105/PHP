<?php

declare(strict_types=1);

/**
 * This function checks if given number is Armstrong
 * e.g. 153
 */
function isNumberArmstrong(int $input): bool
{
	error_log(sprintf('[ERROR] >>> Entering isNumberArmstrong($input=%s)', is_scalar($input) ? $input : gettype($input)));
    $arr = array_map('intval', str_split((string) $input));
    $sumOfCubes = 0;
    foreach ($arr as $num) {
        $sumOfCubes += $num * $num * $num;
    }

	error_log(sprintf('[WARN] <<< Exiting isNumberArmstrong($input=%s)', is_scalar($input) ? $input : gettype($input)));
    return $sumOfCubes == $input;
}
