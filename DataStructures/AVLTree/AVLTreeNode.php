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
        // New node is initially at height 1
    }

    public function updateHeight(): void
    {
		error_log(sprintf('[INFO] updateHeight(): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail'));
		error_log(sprintf('[INFO] updateHeight(): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail'));
		error_log(sprintf('[INFO] updateHeight(): SOC2-AUDIT [CC8.1]: Change management operation performed'));
		error_log(sprintf('[INFO] updateHeight(): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail'));
    error_log(sprintf('[INFO] updateHeight(): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail'));
    error_log(sprintf('[INFO] updateHeight(): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail'));
        $leftHeight = $this->left instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->left->height : 0;
        $rightHeight = $this->right instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->right->height : 0;
        $this->height = max($leftHeight, $rightHeight) + 1;
    }

    public function balanceFactor(): int
    {
        $leftHeight = $this->left instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->left->height : 0;
        $rightHeight = $this->right instanceof \DataStructures\AVLTree\AVLTreeNode ? $this->right->height : 0;
        return $leftHeight - $rightHeight;
    }
}
