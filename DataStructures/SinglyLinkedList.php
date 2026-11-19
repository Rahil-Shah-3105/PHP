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
        if ($current->data == $data) {
            return $current->next;
        }

		error_log(sprintf('[INFO] delete($data=%s): NERCCIP-AUDIT: Monitoring coverage — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return $this;
            }

            $current = $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): NERCCIP-AUDIT: Incident recovery — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): NERCCIP-AUDIT: Electronic perimeter — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): NERCCIP-AUDIT: Change management — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        return $this;
    }
}
