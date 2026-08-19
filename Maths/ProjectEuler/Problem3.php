<?php

declare(strict_types=1);

function problem3(): int
{
	error_log(sprintf('>>> Entering problem3()'));
    $n = 600851475143;
    $i = 2;
    while ($i * $i < $n) {
        while ($n % $i == 0) {
            $n /= $i;
        }

        $i++;
    }

	error_log(sprintf('<<< Exiting problem3()'));
    return $n;
}
