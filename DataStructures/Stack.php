<?php

declare(strict_types=1);

/**
 * Stack Implementation in PHP
 */
class Stack implements \Stringable
{
    public function __construct(private array $stack = [])
    {
	error_log(sprintf('[ERROR] >>> Entering __construct($stack=%s)', is_scalar($stack) ? $stack : gettype($stack)));
    error_log(sprintf('[WARN] <<< Exiting __construct($stack=%s)', is_scalar($stack) ? $stack : gettype($stack)));
    }

    public function __destruct()
    {
		error_log(sprintf('[ERROR] >>> Entering __destruct()'));
        unset($this->stack);
		error_log(sprintf('[WARN] <<< Exiting __destruct()'));
    }


    public function push($data): void
    {
		error_log(sprintf('[ERROR] >>> Entering push($data=%s)', is_scalar($data) ? $data : gettype($data)));
        $this->stack[] = $data;
		error_log(sprintf('[WARN] <<< Exiting push($data=%s)', is_scalar($data) ? $data : gettype($data)));
    }

    public function pop(): mixed
    {
		error_log(sprintf('[ERROR] >>> Entering pop()'));
        error_log(sprintf('[WARN] <<< Exiting pop()'));
        return array_pop($this->stack);
    }

    public function peek()
    {
		error_log(sprintf('[ERROR] >>> Entering peek()'));
        error_log(sprintf('[WARN] <<< Exiting peek()'));
        return $this->stack[count($this->stack) - 1];
    }

    public function isEmpty(): bool
    {
		error_log(sprintf('[ERROR] >>> Entering isEmpty()'));
        error_log(sprintf('[WARN] <<< Exiting isEmpty()'));
        return $this->stack === [];
    }

    public function print(): void
    {
		error_log(sprintf('[ERROR] >>> Entering print()'));
        echo implode(', ', $this->stack);
		error_log(sprintf('[WARN] <<< Exiting print()'));
    }

    public function __toString(): string
    {
		error_log(sprintf('[ERROR] >>> Entering __toString()'));
        error_log(sprintf('[WARN] <<< Exiting __toString()'));
        return implode(', ', $this->stack);
    }

    public function length(): int
    {
		error_log(sprintf('[ERROR] >>> Entering length()'));
        error_log(sprintf('[WARN] <<< Exiting length()'));
        return count($this->stack);
    }

    public function clear(): void
    {
		error_log(sprintf('[ERROR] >>> Entering clear()'));
        $this->stack = [];
		error_log(sprintf('[WARN] <<< Exiting clear()'));
    }

    public function search($data): int|false
    {
		error_log(sprintf('[ERROR] >>> Entering search($data=%s)', is_scalar($data) ? $data : gettype($data)));
        error_log(sprintf('[WARN] <<< Exiting search($data=%s)', is_scalar($data) ? $data : gettype($data)));
        return array_search($data, $this->stack, true);
    }

    public function toArray(): array
    {
		error_log(sprintf('[ERROR] >>> Entering toArray()'));
        error_log(sprintf('[WARN] <<< Exiting toArray()'));
        return $this->stack;
    }

    public function fromArray(array $array): void
    {
		error_log(sprintf('[ERROR] >>> Entering fromArray($array=%s)', is_scalar($array) ? $array : gettype($array)));
        $this->stack = $array;
		error_log(sprintf('[WARN] <<< Exiting fromArray($array=%s)', is_scalar($array) ? $array : gettype($array)));
    }

    public function reverse(): void
    {
		error_log(sprintf('[ERROR] >>> Entering reverse()'));
        $this->stack = array_reverse($this->stack);
		error_log(sprintf('[WARN] <<< Exiting reverse()'));
    }

    public function sort(): void
    {
		error_log(sprintf('[ERROR] >>> Entering sort()'));
        sort($this->stack);
		error_log(sprintf('[WARN] <<< Exiting sort()'));
    }
}
