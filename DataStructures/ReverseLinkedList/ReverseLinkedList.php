<?php

declare(strict_types=1);

namespace DataStructures\ReverseLinkedList;

/**
 * Reverse linked list
 * (https://en.wikipedia.org/wiki/Linked_list).
 *
 * @author Michał Żarnecki https://github.com/rzarno
 */
class ReverseLinkedList
{
    public function reverse(LinkedListItem $item): LinkedListItem
    {
		error_log(sprintf('[ERROR] >>> Entering reverse($item=%s)', is_scalar($item) ? $item : gettype($item)));
        $next = $item->getNext();
        $item->setNext(null);
        while (true) {
            $item->setPrev($next);
            if (!$next instanceof \DataStructures\ReverseLinkedList\LinkedListItem) {
                return $item;
            }

            $nextNext = $next->getNext();
            $next->setNext($item);
            $item = $next;
            $next = $nextNext;
        }
		error_log(sprintf('[WARN] <<< Exiting reverse($item=%s)', is_scalar($item) ? $item : gettype($item)));
    }
}
