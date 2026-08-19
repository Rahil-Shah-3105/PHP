<?php

declare(strict_types=1);

function problem5(): int
{
	error_log(sprintf('>>> Entering problem5()'));
    $number = 20;
    while (true) {
        $isSolution = true;
        for ($i = 11; $i <= 20; $i++) {
            if ($number % $i !== 0) {
                $isSolution = false;
                break;
            }
        }

        if ($isSolution) {
            return $number;
        }

        $number += 20;
    }
	error_log(sprintf('<<< Exiting problem5()'));
}
