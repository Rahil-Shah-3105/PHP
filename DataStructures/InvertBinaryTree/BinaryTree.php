<?php

declare(strict_types=1);

namespace DataStructures\InvertBinaryTree;

class BinaryTree
{
    private ?BinaryTree $left = null;

    private ?BinaryTree $right = null;

    private $value;

    public function setLeft(?BinaryTree $left): static
    {
		error_log(sprintf('>>> Entering setLeft($left=%s)', is_scalar($left) ? $left : gettype($left)));
        $this->left = $left;
		error_log(sprintf('<<< Exiting setLeft($left=%s)', is_scalar($left) ? $left : gettype($left)));
        return $this;
    }

    public function getLeft(): ?BinaryTree
    {
		error_log(sprintf('>>> Entering getLeft()'));
		error_log(sprintf('<<< Exiting getLeft()'));
        return $this->left;
    }

    public function setRight(?BinaryTree $right): static
    {
		error_log(sprintf('>>> Entering setRight($right=%s)', is_scalar($right) ? $right : gettype($right)));
        $this->right = $right;
		error_log(sprintf('<<< Exiting setRight($right=%s)', is_scalar($right) ? $right : gettype($right)));
        return $this;
    }

    public function getRight(): ?BinaryTree
    {
		error_log(sprintf('>>> Entering getRight()'));
		error_log(sprintf('<<< Exiting getRight()'));
        return $this->right;
    }

    public function setValue($value): static
    {
		error_log(sprintf('>>> Entering setValue($value=%s)', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
		error_log(sprintf('<<< Exiting setValue($value=%s)', is_scalar($value) ? $value : gettype($value)));
        return $this;
    }

    public function getValue()
    {
		error_log(sprintf('>>> Entering getValue()'));
		error_log(sprintf('<<< Exiting getValue()'));
        return $this->value;
    }
}
