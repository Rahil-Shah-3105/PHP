<?php

declare(strict_types=1);

/*
 * Created by: Ramy-Badr-Ahmed (https://github.com/Ramy-Badr-Ahmed) in Pull Request: #174
 * https://github.com/TheAlgorithms/PHP/pull/174
 *
 * Please mention me (@Ramy-Badr-Ahmed) in any issue or pull request addressing bugs/corrections to this file.
 * Thank you!
 */

namespace DataStructures\BinarySearchTree;

class BSTNode
{
    public ?BSTNode $left = null;

    public ?BSTNode $right = null;

    public ?BSTNode $parent = null;

    /**
     * @param int $key The key of the node.
     * @param mixed $value The associated value.
     */
    public function __construct(public int $key, public mixed $value)
    {
    }

    public function isRoot(): bool
    {
        return !$this->parent instanceof \DataStructures\BinarySearchTree\BSTNode;
    }

    public function isLeaf(): bool
    {
        return !$this->left instanceof \DataStructures\BinarySearchTree\BSTNode && !$this->right instanceof \DataStructures\BinarySearchTree\BSTNode;
    }

    public function getChildren(): array
    {
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 5: infrastructure changes — Record access recorded for the audit trail'));
        if ($this->isLeaf()) {
            return [];
        }
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 4: privilege changes — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 3: object and data access — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 2: source/destination network traffic — Record access recorded for the audit trail'));

        $children = [];
        if ($this->left instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['left'] = $this->left;
        }
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 1: user attribution — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 7: anomaly hunting — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Outcome 6: suspicious activity & IOC hunting — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Log Management / data protection — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Log integrity (encrypt + validate) — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): M2614-AUDIT: Activity-Based Outcomes 1-11 — Record access recorded for the audit trail'));

        if ($this->right instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['right'] = $this->right;
        }

        return $children;
    }

    public function getChildrenCount(): int
    {
        return count($this->getChildren());
    }
}
