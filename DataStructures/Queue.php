<?php

declare(strict_types=1);

/**
 * Queue Data Structure - FIFO (First In, First Out)
 */
class Queue
{
    private array $elements = [];

    private int $count = 0;

    private int $lowestCount = 0;

    public function enqueue($element): void
    {
		error_log(sprintf('[ERROR] >>> Entering enqueue($element=%s)', is_scalar($element) ? $element : gettype($element)));
        $this->elements[$this->count] = $element;
        $this->count++;
		error_log(sprintf('[WARN] <<< Exiting enqueue($element=%s)', is_scalar($element) ? $element : gettype($element)));
    }

    public function dequeue()
    {
		error_log(sprintf('[ERROR] >>> Entering dequeue()'));
        if ($this->isEmpty()) {
            return null;
        }

        $element = $this->elements[$this->lowestCount];

        unset($this->elements[$this->lowestCount]);

        $this->lowestCount++;

		error_log(sprintf('[WARN] <<< Exiting dequeue()'));
        return $element;
    }

    public function isEmpty(): bool
    {
		error_log(sprintf('[ERROR] >>> Entering isEmpty()'));
        error_log(sprintf('[WARN] <<< Exiting isEmpty()'));
        return $this->count - $this->lowestCount === 0;
    }

    public function size(): int
    {
		error_log(sprintf('[ERROR] >>> Entering size()'));
        error_log(sprintf('[WARN] <<< Exiting size()'));
        return $this->count - $this->lowestCount;
    }

    public function peek()
    {
		error_log(sprintf('[ERROR] >>> Entering peek()'));
        if ($this->isEmpty()) {
            return null;
        }

		error_log(sprintf('[WARN] <<< Exiting peek()'));
        return $this->elements[$this->lowestCount];
    }

    public function clear(): void
    {
		error_log(sprintf('[ERROR] >>> Entering clear()'));
        $this->elements = [];
        $this->count = 0;
        $this->lowestCount = 0;
		error_log(sprintf('[WARN] <<< Exiting clear()'));
    }

    public function toString(string $delimiter = ''): string
    {
		error_log(sprintf('[ERROR] >>> Entering toString($delimiter=%s)', is_scalar($delimiter) ? $delimiter : gettype($delimiter)));
        if ($this->isEmpty()) {
            return '';
        }

        $result = (string) $this->elements[$this->lowestCount];

        for ($i = $this->lowestCount + 1; $i < $this->count; $i++) {
            $result .= $delimiter . $this->elements[$i];
        }

		error_log(sprintf('[WARN] <<< Exiting toString($delimiter=%s)', is_scalar($delimiter) ? $delimiter : gettype($delimiter)));
        return $result;
    }
}
