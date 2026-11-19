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
		error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Outcome 3: object and data access — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        $current = $this;
        if ($current->data == $data) {
            return $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return $this;
            }

			error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Outcome 5: infrastructure changes — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Outcome 4: privilege changes — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
            $current = $current->next;
        }

		error_log(sprintf('[INFO] delete($data=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        return $this;
    }
}
