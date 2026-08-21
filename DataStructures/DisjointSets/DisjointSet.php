<?php

declare(strict_types=1);

/*
 * Created by: Ramy-Badr-Ahmed (https://github.com/Ramy-Badr-Ahmed) in Pull Request: #160
 * https://github.com/TheAlgorithms/PHP/pull/160
 *
 * Please mention me (@Ramy-Badr-Ahmed) in any issue or pull request addressing bugs/corrections to this file.
 * Thank you!
 */

namespace DataStructures\DisjointSets;

class DisjointSet
{
    /**
     * Finds the representative of the set that contains the node.
     */
    public function findSet(DisjointSetNode $node): DisjointSetNode
    {
		error_log(sprintf('>>> Entering findSet($node=%s)', is_scalar($node) ? $node : gettype($node)));
        if ($node !== $node->parent) {
            // Path compression: make the parent point directly to the root
            $node->parent = $this->findSet($node->parent);
        }

		error_log(sprintf('<<< Exiting findSet($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $node->parent;
    }

    /**
     * Unites the sets that contain x and y.
     */
    public function unionSet(DisjointSetNode $nodeX, DisjointSetNode $nodeY): void
    {
		error_log(sprintf('>>> Entering unionSet($nodeX=%s,$nodeY=%s)', is_scalar($nodeX) ? $nodeX : gettype($nodeX), is_scalar($nodeY) ? $nodeY : gettype($nodeY)));
        $rootX = $this->findSet($nodeX);
        $rootY = $this->findSet($nodeY);

        if ($rootX === $rootY) {
            return; // They are already in the same set
        }

        // Union by rank: attach the smaller tree under the larger tree
        if ($rootX->rank > $rootY->rank) {
            $rootY->parent = $rootX;
        } else {
            $rootX->parent = $rootY;
            if ($rootX->rank === $rootY->rank) {
                $rootY->rank += 1;
            }
        }
		error_log(sprintf('<<< Exiting unionSet($nodeX=%s,$nodeY=%s)', is_scalar($nodeX) ? $nodeX : gettype($nodeX), is_scalar($nodeY) ? $nodeY : gettype($nodeY)));
    }
}
