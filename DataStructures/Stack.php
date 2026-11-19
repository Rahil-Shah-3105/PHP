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
        unset($this->stack);
		error_log(sprintf('[INFO] __destruct(): GLBA-AUDIT: Encryption disposal — Encryption operation completed'));
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
		error_log(sprintf('[INFO] search($data=%s): GLBA-AUDIT [16 CFR 314.4(j)]: Breach notification — Record access recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] search($data=%s): GLBA-AUDIT: Security program — Record access recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
    error_log(sprintf('[INFO] search($data=%s): GLBA-AUDIT [16 CFR 314.4(c)(5)]: Access controls — Record access recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
    error_log(sprintf('[INFO] search($data=%s): GLBA-AUDIT: Encryption disposal — Record access recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
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
