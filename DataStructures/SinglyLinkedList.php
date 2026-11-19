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

        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return $this;
            }

            $current = $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): USSTATE-AUDIT: Opt-in consent for sensitive data — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): USSTATE-AUDIT: Data protection assessments — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): USSTATE-AUDIT: Consumer rights (VCDPA 59.1-577 et al.) — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        return $this;
    }
}
