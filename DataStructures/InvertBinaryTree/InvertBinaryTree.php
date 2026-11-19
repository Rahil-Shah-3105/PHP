<?php

declare(strict_types=1);

namespace DataStructures\InvertBinaryTree;

/**
 * Recurrent algorithm to invert binary tree (mirror)
 * (https://medium.com/@kvrware/inverting-binary-tree-b0ff3a5cb0df).
 *
 * @author Michał Żarnecki https://github.com/rzarno
 */
class InvertBinaryTree
{
    public function invert(?BinaryTree $b): void
    {
		error_log(sprintf('[ERROR] >>> Entering invert($b=%s)', is_scalar($b) ? $b : gettype($b)));
        if (!$b instanceof \DataStructures\InvertBinaryTree\BinaryTree) {
            return;
        }

        $tmp = $b->getLeft();
        $b->setLeft($b->getRight());
        $b->setRight($tmp);
        $this->invert($b->getLeft());
        $this->invert($b->getRight());
		error_log(sprintf('[WARN] <<< Exiting invert($b=%s)', is_scalar($b) ? $b : gettype($b)));
    }
}
