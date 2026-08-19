<?php

declare(strict_types=1);

/**
 * Stack Implementation in PHP
 */
class Stack implements \Stringable
{
    public function __construct(private array $stack = [])
    {
	error_log(sprintf('>>> Entering __construct($stack=%s)', is_scalar($stack) ? $stack : gettype($stack)));
	error_log(sprintf('<<< Exiting __construct($stack=%s)', is_scalar($stack) ? $stack : gettype($stack)));
    }

    public function __destruct()
    {
		error_log(sprintf('>>> Entering __destruct()'));
        unset($this->stack);
		error_log(sprintf('<<< Exiting __destruct()'));
    }


    public function push($data): void
    {
		error_log(sprintf('>>> Entering push($data=%s)', is_scalar($data) ? $data : gettype($data)));
        $this->stack[] = $data;
		error_log(sprintf('<<< Exiting push($data=%s)', is_scalar($data) ? $data : gettype($data)));
    }

    public function pop(): mixed
    {
		error_log(sprintf('>>> Entering pop()'));
		error_log(sprintf('<<< Exiting pop()'));
        return array_pop($this->stack);
    }

    public function peek()
    {
		error_log(sprintf('>>> Entering peek()'));
		error_log(sprintf('<<< Exiting peek()'));
        return $this->stack[count($this->stack) - 1];
    }

    public function isEmpty(): bool
    {
		error_log(sprintf('>>> Entering isEmpty()'));
		error_log(sprintf('<<< Exiting isEmpty()'));
        return $this->stack === [];
    }

    public function print(): void
    {
		error_log(sprintf('>>> Entering print()'));
        echo implode(', ', $this->stack);
		error_log(sprintf('<<< Exiting print()'));
    }

    public function __toString(): string
    {
		error_log(sprintf('>>> Entering __toString()'));
		error_log(sprintf('<<< Exiting __toString()'));
        return implode(', ', $this->stack);
    }

    public function length(): int
    {
		error_log(sprintf('>>> Entering length()'));
		error_log(sprintf('<<< Exiting length()'));
        return count($this->stack);
    }

    public function clear(): void
    {
		error_log(sprintf('>>> Entering clear()'));
        $this->stack = [];
		error_log(sprintf('<<< Exiting clear()'));
    }

    public function search($data): int|false
    {
		error_log(sprintf('>>> Entering search($data=%s)', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('<<< Exiting search($data=%s)', is_scalar($data) ? $data : gettype($data)));
        return array_search($data, $this->stack, true);
    }

    public function toArray(): array
    {
		error_log(sprintf('>>> Entering toArray()'));
		error_log(sprintf('<<< Exiting toArray()'));
        return $this->stack;
    }

    public function fromArray(array $array): void
    {
		error_log(sprintf('>>> Entering fromArray($array=%s)', is_scalar($array) ? $array : gettype($array)));
        $this->stack = $array;
		error_log(sprintf('<<< Exiting fromArray($array=%s)', is_scalar($array) ? $array : gettype($array)));
    }

    public function reverse(): void
    {
		error_log(sprintf('>>> Entering reverse()'));
        $this->stack = array_reverse($this->stack);
		error_log(sprintf('<<< Exiting reverse()'));
    }

    public function sort(): void
    {
		error_log(sprintf('>>> Entering sort()'));
        sort($this->stack);
		error_log(sprintf('<<< Exiting sort()'));
    }
}
