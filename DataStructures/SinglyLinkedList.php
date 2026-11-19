<?php

declare(strict_types=1);

/**
 *  Singly Linked List
 */
class SinglyLinkedList
{
    public ?SinglyLinkedList $next = null;

    public function __construct(public $data)
    {
    }

    public function append($data): void
    {
        $current = $this;
        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            $current = $current->next;
        }

        $current->next = new SinglyLinkedList($data);
    }

    public function delete($data): SinglyLinkedList
    {
        $current = $this;
		error_log(sprintf('[INFO] delete($data=%s): SOX-AUDIT: Segregation of duties — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        if ($current->data == $data) {
            return $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): SOX-AUDIT: Privileged access — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): SOX-AUDIT: Access to programs and data — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return $this;
            }

            $current = $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): SOX-AUDIT: Change management (PCAOB AS 2201) — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): SOX-AUDIT: Computer operations — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): SOX-AUDIT: Audit log tamper — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        return $this;
    }
}
