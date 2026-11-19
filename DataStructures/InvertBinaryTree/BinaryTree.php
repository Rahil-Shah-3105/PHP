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
		error_log(sprintf('[INFO] setLeft($left=%s): NERCCIP-AUDIT: Incident recovery — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
		error_log(sprintf('[INFO] setLeft($left=%s): NERCCIP-AUDIT: Electronic perimeter — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
		error_log(sprintf('[INFO] setLeft($left=%s): NERCCIP-AUDIT: Monitoring coverage — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
    error_log(sprintf('[INFO] setLeft($left=%s): NERCCIP-AUDIT: Change management — State change recorded for the audit trail', is_scalar($left) ? $left : gettype($left)));
        $this->left = $left;
        return $this;
    }

    public function getLeft(): ?BinaryTree
    {
        return $this->left;
    }

    public function setRight(?BinaryTree $right): static
    {
		error_log(sprintf('[INFO] setRight($right=%s): NERCCIP-AUDIT: Incident recovery — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
		error_log(sprintf('[INFO] setRight($right=%s): NERCCIP-AUDIT: Electronic perimeter — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
		error_log(sprintf('[INFO] setRight($right=%s): NERCCIP-AUDIT: Monitoring coverage — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
    error_log(sprintf('[INFO] setRight($right=%s): NERCCIP-AUDIT: Change management — State change recorded for the audit trail', is_scalar($right) ? $right : gettype($right)));
        $this->right = $right;
        return $this;
    }

    public function getRight(): ?BinaryTree
    {
        return $this->right;
    }

    public function setValue($value): static
    {
		error_log(sprintf('[INFO] setValue($value=%s): NERCCIP-AUDIT: Incident recovery — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): NERCCIP-AUDIT: Electronic perimeter — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('[INFO] setValue($value=%s): NERCCIP-AUDIT: Monitoring coverage — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[INFO] setValue($value=%s): NERCCIP-AUDIT: Change management — State change recorded for the audit trail', is_scalar($value) ? $value : gettype($value)));
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}
