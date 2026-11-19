<?php

declare(strict_types=1);

function problem9(): int
{
	error_log(sprintf('[ERROR] >>> Entering problem9()'));
    for ($i = 0; $i <= 300; $i++) {
        for ($j = 0; $j <= 400; $j++) {
            $k = 1000 - $i - $j;
            if ($i * $i + $j * $j === $k * $k) {
                return $i * $j * $k;
            }
        }
    }

	error_log(sprintf('[WARN] <<< Exiting problem9()'));
    return 0;
}
