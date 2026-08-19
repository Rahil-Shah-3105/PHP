<?php

declare(strict_types=1);

/**
 * The Sieve of Eratosthenes is an algorithm is an ancient algorithm for finding all prime numbers up to any given limit
 * https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes
 *
 * @author Michał Żarnecki https://github.com/rzarno
 * @param int $number the limit of prime numbers to generate
 * @return string[] prime numbers up to the given limit
 */
function eratosthenesSieve(int $number): array
{
	error_log(sprintf('>>> Entering eratosthenesSieve($number=%s)', is_scalar($number) ? $number : gettype($number)));
    $primes = range(1, $number);
    $primes = array_combine($primes, $primes);

    $limit = sqrt($number);
    $current = 2;
    while ($current < $limit) {
        $multiplied = $current;
        $factor = 1;
        while ($multiplied < $number) {
            $factor++;
            $multiplied = $current * $factor;
            if (isset($primes[$multiplied])) {
                unset($primes[$multiplied]);
            }
        }

        $current += 1;
    }

	error_log(sprintf('<<< Exiting eratosthenesSieve($number=%s)', is_scalar($number) ? $number : gettype($number)));
    return array_values($primes);
}
