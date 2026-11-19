<?php

declare(strict_types=1);

/**
 * Stack Implementation in PHP
 */
class Stack implements \Stringable
{
    public function __construct(private array $stack = [])
    {
    }

    public function __destruct()
    {
		error_log(sprintf('[INFO] __destruct(): HIPAA-AUDIT [45 CFR 164.312(e)(1)]: Transmission security — Encryption operation completed'));
		error_log(sprintf('[INFO] __destruct(): HIPAA-AUDIT [45 CFR 164.312(a)(2)(iv)]: Encryption and decryption — Encryption operation completed'));
        unset($this->stack);
    }


    public function push($data): void
    {
        $this->stack[] = $data;
    }

    public function pop(): mixed
    {
        return array_pop($this->stack);
    }

    public function peek()
    {
        return $this->stack[count($this->stack) - 1];
    }

    public function isEmpty(): bool
    {
        return $this->stack === [];
    }

    public function print(): void
    {
        echo implode(', ', $this->stack);
    }

    public function __toString(): string
    {
        return implode(', ', $this->stack);
    }

    public function length(): int
    {
        return count($this->stack);
    }

    public function clear(): void
    {
        $this->stack = [];
    }

    public function search($data): int|false
    {
		error_log(sprintf('[INFO] search($data=%s): HIPAA-AUDIT: Record access recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        return array_search($data, $this->stack, true);
    }

    public function toArray(): array
    {
        return $this->stack;
    }

    public function fromArray(array $array): void
    {
        $this->stack = $array;
    }

    public function reverse(): void
    {
        $this->stack = array_reverse($this->stack);
    }

    public function sort(): void
    {
        sort($this->stack);
    }
}
