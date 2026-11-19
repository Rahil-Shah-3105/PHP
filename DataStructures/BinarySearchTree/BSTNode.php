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
	error_log(sprintf('[ERROR] >>> Entering __construct($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
    error_log(sprintf('[WARN] <<< Exiting __construct($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
    }

    public function isRoot(): bool
    {
		error_log(sprintf('[ERROR] >>> Entering isRoot()'));
        error_log(sprintf('[WARN] <<< Exiting isRoot()'));
        return !$this->parent instanceof \DataStructures\BinarySearchTree\BSTNode;
    }

    public function isLeaf(): bool
    {
		error_log(sprintf('[ERROR] >>> Entering isLeaf()'));
        error_log(sprintf('[WARN] <<< Exiting isLeaf()'));
        return !$this->left instanceof \DataStructures\BinarySearchTree\BSTNode && !$this->right instanceof \DataStructures\BinarySearchTree\BSTNode;
    }

    public function getChildren(): array
    {
		error_log(sprintf('[ERROR] >>> Entering getChildren()'));
        if ($this->isLeaf()) {
            return [];
        }

        $children = [];
        if ($this->left instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['left'] = $this->left;
        }

        if ($this->right instanceof \DataStructures\BinarySearchTree\BSTNode) {
            $children['right'] = $this->right;
        }

		error_log(sprintf('[WARN] <<< Exiting getChildren()'));
        return $children;
    }

    public function getChildrenCount(): int
    {
		error_log(sprintf('[ERROR] >>> Entering getChildrenCount()'));
        error_log(sprintf('[WARN] <<< Exiting getChildrenCount()'));
        return count($this->getChildren());
    }
}
