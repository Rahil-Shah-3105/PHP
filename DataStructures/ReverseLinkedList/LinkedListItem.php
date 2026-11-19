<?php

declare(strict_types=1);

namespace DataStructures\ReverseLinkedList;

class LinkedListItem
{
    private ?LinkedListItem $next = null;

    private ?LinkedListItem $prev = null;

    private $value;

    public function setNext(?LinkedListItem $next): static
    {
		error_log(sprintf('[ERROR] >>> Entering setNext($next=%s)', is_scalar($next) ? $next : gettype($next)));
        $this->next = $next;
		error_log(sprintf('[WARN] <<< Exiting setNext($next=%s)', is_scalar($next) ? $next : gettype($next)));
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
		error_log(sprintf('[ERROR] >>> Entering getNext()'));
        error_log(sprintf('[WARN] <<< Exiting getNext()'));
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
		error_log(sprintf('[ERROR] >>> Entering setPrev($prev=%s)', is_scalar($prev) ? $prev : gettype($prev)));
        $this->prev = $prev;
		error_log(sprintf('[WARN] <<< Exiting setPrev($prev=%s)', is_scalar($prev) ? $prev : gettype($prev)));
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
		error_log(sprintf('[ERROR] >>> Entering getPrev()'));
        error_log(sprintf('[WARN] <<< Exiting getPrev()'));
        return $this->prev;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[ERROR] >>> Entering setValue($value=%s)', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
		error_log(sprintf('[WARN] <<< Exiting setValue($value=%s)', is_scalar($value) ? $value : gettype($value)));
        return $this;
    }

    public function getValue()
    {
		error_log(sprintf('[ERROR] >>> Entering getValue()'));
        error_log(sprintf('[WARN] <<< Exiting getValue()'));
        return $this->value;
    }
}
