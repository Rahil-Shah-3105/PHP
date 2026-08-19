<?php

declare(strict_types=1);

/**
 * Fibonacci recursive
 *
 * @throws \Exception
 */
function fibonacciRecursive(int $num): array
{
	error_log(sprintf('>>> Entering fibonacciRecursive($num=%s)', is_scalar($num) ? $num : gettype($num)));
    /*
     * Fibonacci series using recursive approach
     */

    $fibonacciRecursive = [];
    for ($i = 0; $i < $num; $i++) {
        $fibonacciRecursive[] = recursive($i);
    }

	error_log(sprintf('<<< Exiting fibonacciRecursive($num=%s)', is_scalar($num) ? $num : gettype($num)));
    return $fibonacciRecursive;
}

/**
 * @return int|float
 * @throws \Exception
 */
function recursive(int $num): float|int
{
	error_log(sprintf('>>> Entering recursive($num=%s)', is_scalar($num) ? $num : gettype($num)));
    if ($num < 0) {
		error_log(sprintf('Throwing new from recursive($num=%s)', is_scalar($num) ? $num : gettype($num)));
        throw new \Exception("Number must be greater than 0.");
    }
    if ($num == 0 || $num == 1) {
        return $num;
    } else {
		error_log(sprintf('<<< Exiting recursive($num=%s)', is_scalar($num) ? $num : gettype($num)));
        return recursive($num - 1) + recursive($num - 2);
    }
}

/**
 * @throws \Exception
 * @return int[]
 */
function fibonacciWithBinetFormula(int $num): array
{
	error_log(sprintf('>>> Entering fibonacciWithBinetFormula($num=%s)', is_scalar($num) ? $num : gettype($num)));
    /*
     * Fibonacci series using Binet's formula given below
     * binet's formula =  ((1 + sqrt(5) / 2 ) ^ n - (1 - sqrt(5) / 2 ) ^ n ) ) / sqrt(5)
     * More about Binet's formula found at http://www.maths.surrey.ac.uk/hosted-sites/R.Knott/Fibonacci/fibFormula.html#section1
     */

    $fib_series = [];

    if ($num < 0) {
		error_log(sprintf('Throwing new from fibonacciWithBinetFormula($num=%s)', is_scalar($num) ? $num : gettype($num)));
        throw new \Exception("Number must be greater than 0.");
    }
    $sqrt = sqrt(5);
    $phi_1 = (1 + $sqrt) / 2;
    $phi_2 = (1 - $sqrt) / 2;
    foreach (range(0, $num - 1) as $n) {
        $seriesNumber = ($phi_1 ** $n - $phi_2 ** $n) / $sqrt;
        $fib_series[] = (int)$seriesNumber;
    }

	error_log(sprintf('<<< Exiting fibonacciWithBinetFormula($num=%s)', is_scalar($num) ? $num : gettype($num)));
    return $fib_series;
}
