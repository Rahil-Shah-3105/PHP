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
		error_log(sprintf('[INFO] setLeft($left=%s): PCI-AUDIT: Script integrity — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
		error_log(sprintf('[INFO] setLeft($left=%s): PCI-AUDIT: Authn controls — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
		error_log(sprintf('[INFO] setLeft($left=%s): PCI-AUDIT: Audit coverage — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
    error_log(sprintf('[INFO] setLeft($left=%s): PCI-AUDIT [Req. 10.7]: Security control failure — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
        $this->left = $left;
        return $this;
    }

    public function getLeft(): ?BinaryTree
    {
        return $this->left;
    }

    public function setRight(?BinaryTree $right): static
    {
		error_log(sprintf('[INFO] setRight($right=%s): PCI-AUDIT: Script integrity — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
		error_log(sprintf('[INFO] setRight($right=%s): PCI-AUDIT: Authn controls — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
		error_log(sprintf('[INFO] setRight($right=%s): PCI-AUDIT: Audit coverage — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
    error_log(sprintf('[INFO] setRight($right=%s): PCI-AUDIT [Req. 10.7]: Security control failure — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
        $this->right = $right;
        return $this;
    }

    public function getRight(): ?BinaryTree
    {
        return $this->right;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): PCI-AUDIT: Script integrity — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): PCI-AUDIT: Authn controls — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): PCI-AUDIT: Audit coverage — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): PCI-AUDIT [Req. 10.7]: Security control failure — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
