<?php

declare(strict_types=1);

/**
 * Linked List Node Class
 */
class Node
{
    public ?Node $next = null;

    public ?Node $prev = null;

    // Constructor
    public function __construct(public $data)
    {
	error_log(sprintf('>>> Entering __construct($data=%s)', is_scalar($data) ? $data : gettype($data)));
	error_log(sprintf('<<< Exiting __construct($data=%s)', is_scalar($data) ? $data : gettype($data)));
    }
}
