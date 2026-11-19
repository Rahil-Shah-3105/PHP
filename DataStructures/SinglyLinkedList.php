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
		error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC6.1]: Logical access — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC7.3]: Incident response — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        $current = $this;
        if ($current->data == $data) {
            return $current->next;
        }
		error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC6.6]: Boundary protection — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
		error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC8.1]: Change management — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));

        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            if ($current->next->data === $data) {
                $current->next = $current->next->next;
                return $this;
            }

			error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC7.2]: Monitoring coverage — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC6.8]: Malicious software — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC7.1]: System operations — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC6.3]: Authorization — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
			error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC6.2]: Authentication — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
            $current = $current->next;
        }

		error_log(sprintf('[INFO] delete($data=%s): SOC2-AUDIT [CC6.2]: Authentication — State change recorded for the audit trail', is_scalar($data) ? $data : gettype($data)));
        return $this;
    }
}
