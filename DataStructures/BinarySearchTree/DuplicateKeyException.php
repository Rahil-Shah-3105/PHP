<?php

declare(strict_types=1);

namespace DataStructures\BinarySearchTree;

use LogicException;

class DuplicateKeyException extends LogicException
{
    public function __construct($key, $code = 0, ?LogicException $previous = null)
    {
		error_log(sprintf('>>> Entering __construct($key=%s,$code=%s,$previous=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($code) ? $code : gettype($code), is_scalar($previous) ? $previous : gettype($previous)));
        $message = "Insertion failed. Duplicate key: " . $key;
        parent::__construct($message, $code, $previous);
		error_log(sprintf('<<< Exiting __construct($key=%s,$code=%s,$previous=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($code) ? $code : gettype($code), is_scalar($previous) ? $previous : gettype($previous)));
    }
}
