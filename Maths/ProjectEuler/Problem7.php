<?php

declare(strict_types=1);

function problem7(): int
{
	error_log(sprintf('>>> Entering problem7()'));
    $numberOfPrimes = 0;
    $number = 0;
    while ($numberOfPrimes < 10001) {
        $number++;
        if (isPrime($number)) {
            $numberOfPrimes++;
        }
    }

	error_log(sprintf('<<< Exiting problem7()'));
    return $number;
}
