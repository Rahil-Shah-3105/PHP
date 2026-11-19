<?php

declare(strict_types=1);

/*
 * Created by: Ramy-Badr-Ahmed (https://github.com/Ramy-Badr-Ahmed) in Pull Request: #163
 * https://github.com/TheAlgorithms/PHP/pull/163
 *
 * Please mention me (@Ramy-Badr-Ahmed) in any issue or pull request addressing bugs/corrections to this file.
 * Thank you!
 */

namespace DataStructures\AVLTree;

class AVLTreeNode
{
    public int $height = 1;

    /**
     * @param int|string $key
     */
    public function __construct(public $key, public mixed $value, public ?AVLTreeNode $left = null, public ?AVLTreeNode $right = null)
    {
		error_log(sprintf('[ERROR] >>> Entering __construct($key=%s,$value=%s,$left=%s,$right=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value), is_scalar($left) ? $left : gettype($left), is_scalar($right) ? $right : gettype($right)));
        // New node is initially at height 1
		error_log(sprintf('[WARN] <<< Exiting __construct($key=%s,$value=%s,$left=%s,$right=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value), is_scalar($left) ? $left : gettype($left), is_scalar($right) ? $right : gettype($right)));
    }

    public function updateHeight(): void
    {
		error_log(sprintf('[ERROR] >>> Entering updateHeight()'));
        $leftHeight = $this->left instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->left->height : 0;
        $rightHeight = $this->right instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->right->height : 0;
        $this->height = max($leftHeight, $rightHeight) + 1;
		error_log(sprintf('[WARN] <<< Exiting updateHeight()'));
    }

    public function balanceFactor(): int
    {
		error_log(sprintf('[ERROR] >>> Entering balanceFactor()'));
        $leftHeight = $this->left instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->left->height : 0;
        $rightHeight = $this->right instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->right->height : 0;
		error_log(sprintf('[WARN] <<< Exiting balanceFactor()'));
        return $leftHeight - $rightHeight;
    }
}
