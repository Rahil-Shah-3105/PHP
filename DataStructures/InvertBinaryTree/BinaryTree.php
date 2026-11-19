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
		error_log(sprintf('[INFO] setLeft($left=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
		error_log(sprintf('[INFO] setLeft($left=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
		error_log(sprintf('[INFO] setLeft($left=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
    error_log(sprintf('[INFO] setLeft($left=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
    error_log(sprintf('[INFO] setLeft($left=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
        $this->left = $left;
        return $this;
    }

    public function getLeft(): ?BinaryTree
    {
        return $this->left;
    }

    public function setRight(?BinaryTree $right): static
    {
		error_log(sprintf('[INFO] setRight($right=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
		error_log(sprintf('[INFO] setRight($right=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
		error_log(sprintf('[INFO] setRight($right=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
    error_log(sprintf('[INFO] setRight($right=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
    error_log(sprintf('[INFO] setRight($right=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
        $this->right = $right;
        return $this;
    }

    public function getRight(): ?BinaryTree
    {
        return $this->right;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
