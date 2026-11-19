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
		error_log(sprintf('[INFO] setNext($next=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
        $this->next = $next;
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
		error_log(sprintf('[INFO] setPrev($prev=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
        $this->prev = $prev;
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
        return $this->prev;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
