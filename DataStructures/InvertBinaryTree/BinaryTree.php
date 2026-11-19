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
        $this->left = $left;
		error_log(sprintf('[INFO] setLeft($left=%s): HIPAA-AUDIT: State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
        return $this;
    }

    public function getLeft(): ?BinaryTree
    {
        return $this->left;
    }

    public function setRight(?BinaryTree $right): static
    {
        $this->right = $right;
		error_log(sprintf('[INFO] setRight($right=%s): HIPAA-AUDIT: State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
        return $this;
    }

    public function getRight(): ?BinaryTree
    {
        return $this->right;
    }

    public function setValue($value): static
    {
        $this->value = $value;
		error_log(sprintf('[INFO] setValue($value=%s): HIPAA-AUDIT: State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
