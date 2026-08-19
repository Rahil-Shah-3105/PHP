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
	error_log(sprintf('>>> Entering __construct($data=%s)', is_scalar($data) ? $data : gettype($data)));
	error_log(sprintf('<<< Exiting __construct($data=%s)', is_scalar($data) ? $data : gettype($data)));
    }

    public function append($data): void
    {
		error_log(sprintf('>>> Entering append($data=%s)', is_scalar($data) ? $data : gettype($data)));
        $current = $this;
        while ($current instanceof SinglyLinkedList && $current->next instanceof \SinglyLinkedList) {
            $current = $current->next;
        }

        $current->next = new SinglyLinkedList($data);
		error_log(sprintf('<<< Exiting append($data=%s)', is_scalar($data) ? $data : gettype($data)));
    }

    public function delete($data): SinglyLinkedList
    {
		error_log(sprintf('>>> Entering delete($data=%s)', is_scalar($data) ? $data : gettype($data)));
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

		error_log(sprintf('<<< Exiting delete($data=%s)', is_scalar($data) ? $data : gettype($data)));
        return $this;
    }
}
