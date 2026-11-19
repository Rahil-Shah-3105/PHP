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
		error_log(sprintf('[INFO] setNext($next=%s): CMMC-AUDIT: Crypto protection — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): CMMC-AUDIT: Audit traceability — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): CMMC-AUDIT: Access control — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): CMMC-AUDIT: Media protection — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): CMMC-AUDIT: Incident response — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
        $this->next = $next;
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
		error_log(sprintf('[INFO] setPrev($prev=%s): CMMC-AUDIT: Crypto protection — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): CMMC-AUDIT: Audit traceability — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): CMMC-AUDIT: Access control — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): CMMC-AUDIT: Media protection — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): CMMC-AUDIT: Incident response — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
        $this->prev = $prev;
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
        return $this->prev;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): CMMC-AUDIT: Crypto protection — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): CMMC-AUDIT: Audit traceability — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): CMMC-AUDIT: Access control — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): CMMC-AUDIT: Media protection — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): CMMC-AUDIT: Incident response — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
