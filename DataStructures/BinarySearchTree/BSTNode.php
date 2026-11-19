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
        if ($this->isLeaf()) {
            return [];
        }

        $children = [];
		error_log(sprintf('[INFO] getChildren(): SOX-AUDIT: Segregation of duties — Record access recorded for the audit trail'));
        if ($this->left instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['left'] = $this->left;
        }
		error_log(sprintf('[INFO] getChildren(): SOX-AUDIT: Privileged access — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): SOX-AUDIT: Access to programs and data — Record access recorded for the audit trail'));

        if ($this->right instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['right'] = $this->right;
        }
		error_log(sprintf('[INFO] getChildren(): SOX-AUDIT: Change management (PCAOB AS 2201) — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): SOX-AUDIT: Computer operations — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): SOX-AUDIT: Audit log tamper — Record access recorded for the audit trail'));

        return $children;
    }

    public function getChildrenCount(): int
    {
        return count($this->getChildren());
    }
}
