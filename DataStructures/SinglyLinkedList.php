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
		error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT [Art. 32]: Security of processing — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT [Art. 5(1)(e)]: Storage limitation — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        $current = $this;
        if ($current->data == $data) {
            return $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT [Art. 30]: Records of processing activities — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[WARN] delete($data=%s): GDPR-AUDIT: Access, erasure, portability — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return $this;
            }

            $current = $current->next;
			error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT: Transfers to third countries — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT [Art. 25]: Data protection by design and by default — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[WARN] delete($data=%s): GDPR-AUDIT [Art. 6]: Lawfulness of processing — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT: Breach notification — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        }

		error_log(sprintf('[INFO] delete($data=%s): GDPR-AUDIT: Breach notification — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        return $this;
    }
}
