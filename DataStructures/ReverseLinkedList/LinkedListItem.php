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
		error_log(sprintf('[INFO] setNext($next=%s): GLBA-AUDIT: Encryption disposal — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): GLBA-AUDIT [16 CFR 314.4(j)]: Breach notification — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): GLBA-AUDIT: Security program — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): GLBA-AUDIT [16 CFR 314.4(c)(5)]: Access controls — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
        $this->next = $next;
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
		error_log(sprintf('[INFO] setPrev($prev=%s): GLBA-AUDIT: Encryption disposal — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): GLBA-AUDIT [16 CFR 314.4(j)]: Breach notification — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): GLBA-AUDIT: Security program — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): GLBA-AUDIT [16 CFR 314.4(c)(5)]: Access controls — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
        $this->prev = $prev;
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
        return $this->prev;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): GLBA-AUDIT: Encryption disposal — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): GLBA-AUDIT [16 CFR 314.4(j)]: Breach notification — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): GLBA-AUDIT: Security program — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): GLBA-AUDIT [16 CFR 314.4(c)(5)]: Access controls — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
