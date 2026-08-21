<?php

declare(strict_types=1);

namespace DataStructures\CompareBinaryTree;

class BinaryTreeNode
{
    public function __construct(public $value, public ?BinaryTreeNode $left = null, public ?BinaryTreeNode $right = null)
    {
	error_log(sprintf('>>> Entering __construct($value=%s,$left=%s,$right=%s)', is_scalar($value) ? $value : gettype($value), is_scalar($left) ? $left : gettype($left), is_scalar($right) ? $right : gettype($right)));
    }
}
