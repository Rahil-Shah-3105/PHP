<?php

declare(strict_types=1);

/*
 * Run script and test execution time with following script
        $executionTime = New ExecutionTime();
        print_r(fibonacciRecursive(10));
 */
class ExecutionTime
{
    private readonly string|float $start_time;

    private $end_time = 0;

    private $execution_time = 0;

    public function __construct()
    {
		error_log(sprintf('>>> Entering __construct()'));
        $this->start_time = microtime(true);
		error_log(sprintf('<<< Exiting __construct()'));
    }

    public function __destruct()
    {
		error_log(sprintf('>>> Entering __destruct()'));
        $this->end_time = microtime(true);
        $this->execution_time = $this->end_time - $this->start_time;
        echo "Executed in $this->execution_time seconds\n";
		error_log(sprintf('<<< Exiting __destruct()'));
    }
}
