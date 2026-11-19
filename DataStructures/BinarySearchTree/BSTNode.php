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
        if ($this->left instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['left'] = $this->left;
        }

		error_log(sprintf('[INFO] getChildren(): GLBA-AUDIT: Security program — Record access recorded for the audit trail'));
        if ($this->right instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['right'] = $this->right;
        }
		error_log(sprintf('[INFO] getChildren(): GLBA-AUDIT: Encryption disposal — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): GLBA-AUDIT [16 CFR 314.4(j)]: Breach notification — Record access recorded for the audit trail'));
		error_log(sprintf('[INFO] getChildren(): GLBA-AUDIT [16 CFR 314.4(c)(5)]: Access controls — Record access recorded for the audit trail'));

        return $children;
    }

    public function getChildrenCount(): int
    {
        return count($this->getChildren());
    }
}
