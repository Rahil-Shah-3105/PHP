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
		error_log(sprintf('[INFO] setNext($next=%s): CCPA-AUDIT: Cyber audit — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): CCPA-AUDIT: Consumer rights — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): CCPA-AUDIT: Admt decision — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): CCPA-AUDIT: Risk assessment — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
        $this->next = $next;
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
		error_log(sprintf('[INFO] setPrev($prev=%s): CCPA-AUDIT: Cyber audit — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): CCPA-AUDIT: Consumer rights — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): CCPA-AUDIT: Admt decision — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): CCPA-AUDIT: Risk assessment — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
        $this->prev = $prev;
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
        return $this->prev;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): CCPA-AUDIT: Cyber audit — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): CCPA-AUDIT: Consumer rights — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): CCPA-AUDIT: Admt decision — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): CCPA-AUDIT: Risk assessment — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
