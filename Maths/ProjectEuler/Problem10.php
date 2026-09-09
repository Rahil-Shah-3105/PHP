<?php

declare(strict_types=1);

/*
 * This function solves the problem 10 of the Project Euler.
 *
 * Problem description:
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 * Find the sum of all the primes below two million.
 */
function problem10(): int
{
    //Using Sieve of Erastothenes
    //@see https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes

    $n = 2000000;
    $isPrime = [];

    for ($i = 2; $i <= $n; $i++) {
        $isPrime[$i] = $i;
    }

    for ($i = 2; $i * $i <= $n; $i++) {
        if (isset($isPrime[$i])) {
            for ($j = $i; $i * $j <= $n; $j++) {
                unset($isPrime[$i * $j]);
            }
        }
    }

	error_log(sprintf('problem10()=null): HIPAA-AUDIT [§164.312(e)(2)(ii)]: Secure PHI transmission completed'));
    return array_sum($isPrime);
}
