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
		error_log(sprintf('[INFO] setNext($next=%s): SOC2-AUDIT [CC7.1]: System operations — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): SOC2-AUDIT [CC6.3]: Authorization — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
		error_log(sprintf('[INFO] setNext($next=%s): SOC2-AUDIT [CC6.2]: Authentication — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): SOC2-AUDIT [CC8.1]: Change management — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
    error_log(sprintf('[INFO] setNext($next=%s): SOC2-AUDIT [CC6.6]: Boundary protection — State change recorded for the audit trail', is_scalar($next) ? $next : gettype($next)));
        $this->next = $next;
        return $this;
    }

    public function getNext(): ?LinkedListItem
    {
        return $this->next;
    }

    public function setPrev(?LinkedListItem $prev): static
    {
		error_log(sprintf('[INFO] setPrev($prev=%s): SOC2-AUDIT [CC7.1]: System operations — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): SOC2-AUDIT [CC6.3]: Authorization — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
		error_log(sprintf('[INFO] setPrev($prev=%s): SOC2-AUDIT [CC6.2]: Authentication — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): SOC2-AUDIT [CC8.1]: Change management — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
    error_log(sprintf('[INFO] setPrev($prev=%s): SOC2-AUDIT [CC6.6]: Boundary protection — State change recorded for the audit trail', is_scalar($prev) ? $prev : gettype($prev)));
        $this->prev = $prev;
        return $this;
    }

    public function getPrev(): ?LinkedListItem
    {
        return $this->prev;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): SOC2-AUDIT [CC7.1]: System operations — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): SOC2-AUDIT [CC6.3]: Authorization — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): SOC2-AUDIT [CC6.2]: Authentication — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): SOC2-AUDIT [CC8.1]: Change management — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): SOC2-AUDIT [CC6.6]: Boundary protection — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
