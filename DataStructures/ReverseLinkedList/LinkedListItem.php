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
        $this->next = $next;
		error_log(sprintf('[INFO] setNext($next=%s): HIPAA-AUDIT: State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
        $this->prev = $prev;
		error_log(sprintf('[INFO] setPrev($prev=%s): HIPAA-AUDIT: State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
        return $this->prev;
    }

    public function setValue($value): static
    {
        $this->value = $value;
		error_log(sprintf('[INFO] setValue($value=%s): HIPAA-AUDIT: State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
