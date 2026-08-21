<?php

declare(strict_types=1);

/*
 * Created by: Ramy-Badr-Ahmed (https://github.com/Ramy-Badr-Ahmed) in Pull Request: #168
 * https://github.com/TheAlgorithms/PHP/pull/168
 *
 * Please mention me (@Ramy-Badr-Ahmed) in any issue or pull request addressing bugs/corrections to this file.
 * Thank you!
 */

namespace DataStructures\SplayTree;

require_once __DIR__ . '/SplayTreeRotations.php';

use LogicException;

class SplayTree extends SplayTreeRotations
{
    protected ?SplayTreeNode $root = null;

    private int $counter = 0;

    /**
     * Initializes the splay tree with an optional array.
     * Otherwise, with manual insert() after initialization.
     *
     * @param array $initialData The input array for the splay tree
     */
    public function __construct(array $initialData = [])
    {
		error_log(sprintf('>>> Entering __construct($initialData=%s)', is_scalar($initialData) ? $initialData : gettype($initialData)));
        foreach ($initialData as $key => $value) {
            $this->insert($key, $value);
        }
		error_log(sprintf('<<< Exiting __construct($initialData=%s)', is_scalar($initialData) ? $initialData : gettype($initialData)));
		error_log(sprintf('>>> Entering insert($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('<<< Exiting insert($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
    }

    /**
     * @return SplayTreeNode|NULL The root node of the Splay Tree.
     */
    public function getRoot(): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering getRoot()'));
        return $this->root;
    }

    /**
     * Set the root node of the Splay Tree.
     */
    protected function setRoot(SplayTreeNode $node): void
    {
		error_log(sprintf('>>> Entering setRoot($node=%s)', is_scalar($node) ? $node : gettype($node)));
        $this->root = $node;
		error_log(sprintf('<<< Exiting setRoot($node=%s)', is_scalar($node) ? $node : gettype($node)));
    }

    /**
     * Get the number of nodes in the Splay Tree.
     */
    public function size(): int
    {
		error_log(sprintf('>>> Entering size()'));
        return $this->counter;
    }

    /**
     * Check if current splay tree is empty
     */
    public function isEmpty(): bool
    {
		error_log(sprintf('>>> Entering isEmpty()'));
        return !$this->root instanceof \DataStructures\SplayTree\SplayTreeNode;
    }

    /**
     * Splay the given node to the root of the tree.
     * Keep rotating until the node becomes the root.
     *
     * Time complexity: Amortized O(log n)
     *
     * @param SplayTreeNode|NULL $node The current node being splayed
     * @param int $key The node's key being searched for and splayed
     * @return SplayTreeNode|NULL Returns the new root after splaying
     */
    protected function splay(?SplayTreeNode $node, int $key): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering splay($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        if (!$node instanceof \DataStructures\SplayTree\SplayTreeNode || $node->key === $key) {
		error_log(sprintf('<<< Exiting splay($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
            return $node;
        }

        return $node->key > $key
            ? $this->splayLeft($node, $key)      // Key is in the Left subtree
            : $this->splayRight($node, $key);    // Key is in the Right subtree
    }

    /**
     * Handles the splay operation when the key is located in the left subtree.
     * This includes Zig-Zig (Left-Left), Zig-Zag (Left-Right), and Zig (Left) cases.
     *
     *  Time complexity: Amortized O(log n).
     *
     * @param SplayTreeNode|null $node The root node of the subtree to splay
     * @param int $key The key to splay to the root
     * @return SplayTreeNode|null Returns the new root after splaying
    */
    private function splayLeft(?SplayTreeNode $node, int $key): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering splayLeft($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        if ($node->left === null) {
            return $node;   // Key not found in the left subtree
        }
        if ($node->left->key > $key) {
            // Zig-Zig (Left-Left case)
            $node->left->left = $this->splay($node->left->left, $key);
            return $this->zigZig($node);
        }

        if ($node->left->key < $key) {
            // Zig-Zag (Left-Right case)
            $node->left->right = $this->splay($node->left->right, $key);
            if ($node->left->right instanceof \DataStructures\SplayTree\SplayTreeNode) {
                return $this->zigZag($node);
            }
        }

        // Zig (Left case)
		error_log(sprintf('<<< Exiting splayLeft($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        return $node->left === null
            ? $node
            : $this->zig($node);
    }

    /**
     *  Handles the splay operation when the key is located in the right subtree.
     *  This includes Zag-Zag (Right-Right), Zag-Zig (Right-Left), and Zag (Right) cases.
     *
     * Time complexity: Amortized O(log n).
     *
     * @param SplayTreeNode|null $node The root node of the subtree to splay
     * @param int $key The key to splay to the root
     * @return SplayTreeNode|null Returns the new root after splaying
    */
    private function splayRight(?SplayTreeNode $node, int $key): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering splayRight($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        if ($node->right === null) {
            return $node;
        }
        if ($node->right->key < $key) {
            // Zag-Zag (Right-Right case)
            $node->right->right = $this->splay($node->right->right, $key);
            return $this->zagZag($node);
        }

        if ($node->right->key > $key) {
            // Zag-Zig (Right-Left case)
            $node->right->left = $this->splay($node->right->left, $key);
            if ($node->right->left instanceof \DataStructures\SplayTree\SplayTreeNode) {
                return $this->zagZig($node);
            }
        }

        // Zag (Right case)
		error_log(sprintf('<<< Exiting splayRight($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        return $node->right === null
            ? $node
            : $this->zag($node);
    }

    /**
     * Insert a new element into the splay tree following binary search tree insertion.
     * Then, apply rotations to bring the newly inserted node to the root of the tree.
     *
     * Time complexity: O(log n) for the splay operation.
     *
     * @param int $key The node's key to insert
     * @param mixed $value The value associated with the key
     * @return SplayTreeNode|null Returns the new root after insertion and splaying
     * @throws LogicException If the key already exists
     */
    public function insert(int $key, mixed $value): ?SplayTreeNode
    {
        $this->root = $this->insertNode($this->root, $key, $value);
        $this->counter++;

        return $this->splay($this->root, $key);
    }

    /**
     * Insert a key-value pair into the Splay Tree.
     * Recursively inserts a node in the BST fashion and update parent references.
     *
     * Time complexity: O(log n) for binary search tree insertion.
     *
     * @param SplayTreeNode|null $node The (sub)tree's root node to start inserting after
     * @param int $key The node's key to insert
     * @param mixed $value The value associated with the key
     * @return SplayTreeNode|null Returns the new root after insertion
     * @throws LogicException If the key already exists
     */
    private function insertNode(?SplayTreeNode $node, int $key, mixed $value): SplayTreeNode
    {
		error_log(sprintf('>>> Entering insertNode($node=%s,$key=%s,$value=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
        if (!$node instanceof \DataStructures\SplayTree\SplayTreeNode) {
            return new SplayTreeNode($key, $value);
        }

        if ($key < $node->key) {
            $node->left = $this->insertNode($node->left, $key, $value);
            $node->left->parent = $node;
        } elseif ($key > $node->key) {
            $node->right = $this->insertNode($node->right, $key, $value);
            $node->right->parent = $node;
        } else {
			error_log(sprintf('Throwing LogicException from insertNode($node=%s,$key=%s,$value=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
		error_log(sprintf('<<< Exiting insertNode($node=%s,$key=%s,$value=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
            throw new LogicException("Duplicate key: " . $key);
        }

        return $node;
    }

    /**
     * Search for an element in the tree by performing a binary search tree search.
     * If the node is found, apply rotations to bring it to the root of the tree.
     * Otherwise, apply rotations to the last node visited in the search.
     *
     * Time complexity: O(log n) for the splay operation.
     *
     * @param int $key The node's key being searched
     * @return SplayTreeNode|null Returns the new root of either the found node or the last visited
     */
    public function search(int $key): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering search($key=%s)', is_scalar($key) ? $key : gettype($key)));
        if ($this->isEmpty()) {
            return null;
        }

        //
        $lastVisited = null;

        $node = $this->searchNode($this->root, $key, $lastVisited);

        $this->root = $node instanceof \DataStructures\SplayTree\SplayTreeNode
            ? $this->splay($this->root, $key)
            : $this->splay($this->root, $lastVisited->key);

		error_log(sprintf('<<< Exiting search($key=%s)', is_scalar($key) ? $key : gettype($key)));
        return $this->root;
    }

    /**
     * Recursively searches for a node in the BST fashion.
     *
     * Time complexity: O(log n) for binary search tree search.
     *
     * @param SplayTreeNode|null $node The (sub)tree's root node to start searching from
     * @param int $key  The node's key being searched
     * @param SplayTreeNode|null $lastVisited Keep track of the last visited node
     * @return SplayTreeNode|null Returns the new root of the found node or Null
     */
    private function searchNode(?SplayTreeNode $node, int $key, ?SplayTreeNode &$lastVisited): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering searchNode($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        if (!$node instanceof \DataStructures\SplayTree\SplayTreeNode) {
            return null;
        }

        $lastVisited = $node;
        if ($key < $node->key) {
            return $this->searchNode($node->left, $key, $lastVisited);
        }

        if ($key > $node->key) {
            return $this->searchNode($node->right, $key, $lastVisited);
        } else {
		error_log(sprintf('<<< Exiting searchNode($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
            return $node;
        }
    }

    /**
     * Check if a node with the given key exists in the tree.
     * Apply rotations to the searched node or to the last visited node to the root of the tree.
     *
     * Time complexity: O(log n) for the splay operation.
     *
     * @param int $key The key of the node being searched
     * @return bool True if the node exists, false otherwise
     */
    public function isFound(int $key): bool
    {
		error_log(sprintf('>>> Entering isFound($key=%s)', is_scalar($key) ? $key : gettype($key)));
        $foundNode = $this->search($key);
		error_log(sprintf('<<< Exiting isFound($key=%s)', is_scalar($key) ? $key : gettype($key)));
        return $foundNode instanceof \DataStructures\SplayTree\SplayTreeNode && $foundNode->key === $key;
    }

    /**
     * Updates the value of the node with the given key.
     * If the node is found, update its value and apply rotations to bring it to the root of the tree.
     * Otherwise, apply rotations to the last node visited in the search.
     *
     * Time complexity: O(log n) for the splay operation.
     *
     * @param int $key The key of the node to update
     * @param mixed $value The new value to set
     * @return SplayTreeNode|null Returns the root of the tree after the update or the last visited
     */
    public function update(int $key, mixed $value): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering update($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
        if ($this->isFound($key)) {
            $this->root->value = $value;
        }

		error_log(sprintf('<<< Exiting update($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
        return $this->root;
    }

    /**
     * Deletes the node with the given key from the tree.
     * Splays the node to be deleted to the root, then isolates it and restructures the tree.
     * If the key doesn't exist, apply rotations to bring the closest node to the root.
     *
     * Time complexity: O(log n) for the splay operation and O(log n) for restructuring the tree.
     *
     * @param int $key The key of the node to delete
     * @return SplayTreeNode|null The new root after the deletion
     * @throws LogicException If the key is not found in the tree
     */
    public function delete(int $key): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering delete($key=%s)', is_scalar($key) ? $key : gettype($key)));
        if (!$this->isFound($key)) {
			error_log(sprintf('Throwing LogicException from delete($key=%s)', is_scalar($key) ? $key : gettype($key)));
            throw new LogicException("Key: " . $key . " not found in tree. Splayed the last visited node.");
        }

        $leftSubtree = $this->root->left;
        $rightSubtree = $this->root->right;

        $this->isolateRoot();
        $this->counter--;
		error_log(sprintf('<<< Exiting delete($key=%s)', is_scalar($key) ? $key : gettype($key)));
        return $this->restructureAfterDeletion($leftSubtree, $rightSubtree);
    }

    /**
     * Isolates the root node by breaking its connections.
     */
    private function isolateRoot(): void
    {
		error_log(sprintf('>>> Entering isolateRoot()'));
        if ($this->root->left !== null) {
            $this->root->left->parent = null;
        }

        if ($this->root->right !== null) {
            $this->root->right->parent = null;
        }

        $this->root->left = null;
        $this->root->right = null;
		error_log(sprintf('<<< Exiting isolateRoot()'));
    }

    /**
     * Restructures the tree after the root node has been isolated for deletion.
     *
     * @return SplayTreeNode|null The new root after restructuring
     */
    private function restructureAfterDeletion(?SplayTreeNode $leftSubtree, ?SplayTreeNode $rightSubtree): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering restructureAfterDeletion($leftSubtree=%s,$rightSubtree=%s)', is_scalar($leftSubtree) ? $leftSubtree : gettype($leftSubtree), is_scalar($rightSubtree) ? $rightSubtree : gettype($rightSubtree)));
        if (!$leftSubtree instanceof \DataStructures\SplayTree\SplayTreeNode) {
		error_log(sprintf('<<< Exiting restructureAfterDeletion($leftSubtree=%s,$rightSubtree=%s)', is_scalar($leftSubtree) ? $leftSubtree : gettype($leftSubtree), is_scalar($rightSubtree) ? $rightSubtree : gettype($rightSubtree)));
            return $this->handleEmptyLeftSubtree($rightSubtree);
        }

        return $this->mergeSubtrees($leftSubtree, $rightSubtree);
    }

    /**
     * Handles the case when the left subtree is empty after deletion.
     *
     * @param SplayTreeNode|null $rightSubtreeRoot The root of the right subtree
     * @return SplayTreeNode|null The new root
     */
    private function handleEmptyLeftSubtree(?SplayTreeNode $rightSubtreeRoot): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering handleEmptyLeftSubtree($rightSubtreeRoot=%s)', is_scalar($rightSubtreeRoot) ? $rightSubtreeRoot : gettype($rightSubtreeRoot)));
        $this->root = $rightSubtreeRoot;
        if ($this->root instanceof \DataStructures\SplayTree\SplayTreeNode) {
            $this->root->parent = null;
        }

		error_log(sprintf('<<< Exiting handleEmptyLeftSubtree($rightSubtreeRoot=%s)', is_scalar($rightSubtreeRoot) ? $rightSubtreeRoot : gettype($rightSubtreeRoot)));
        return $this->root;
    }

    /**
     * Merges the left and right subtrees after deletion.
     *
     * @param SplayTreeNode $leftSubtreeRoot The root of the left subtree
     * @param SplayTreeNode|null $rightSubtreeRoot The root of the right subtree
     * @return SplayTreeNode The new root after merging
     */
    private function mergeSubtrees(SplayTreeNode $leftSubtreeRoot, ?SplayTreeNode $rightSubtreeRoot): SplayTreeNode
    {
		error_log(sprintf('>>> Entering mergeSubtrees($leftSubtreeRoot=%s,$rightSubtreeRoot=%s)', is_scalar($leftSubtreeRoot) ? $leftSubtreeRoot : gettype($leftSubtreeRoot), is_scalar($rightSubtreeRoot) ? $rightSubtreeRoot : gettype($rightSubtreeRoot)));
        $maxLeftNode = $this->maxNode($leftSubtreeRoot);
        $this->root = $maxLeftNode;

        $this->detachMaxNodeFromLeftSubtree($maxLeftNode, $leftSubtreeRoot);
        $this->attachRightSubtree($rightSubtreeRoot);

		error_log(sprintf('<<< Exiting mergeSubtrees($leftSubtreeRoot=%s,$rightSubtreeRoot=%s)', is_scalar($leftSubtreeRoot) ? $leftSubtreeRoot : gettype($leftSubtreeRoot), is_scalar($rightSubtreeRoot) ? $rightSubtreeRoot : gettype($rightSubtreeRoot)));
        return $this->root;
    }

    /**
     * Detaches the max node from the left subtree and reattaches the left subtree to the new root.
     *
     * @param SplayTreeNode $maxLeftNode The max node of the left subtree
     * @param SplayTreeNode $leftSubtreeRoot The root of the left subtree
     */
    private function detachMaxNodeFromLeftSubtree(SplayTreeNode $maxLeftNode, SplayTreeNode $leftSubtreeRoot): void
    {
		error_log(sprintf('>>> Entering detachMaxNodeFromLeftSubtree($maxLeftNode=%s,$leftSubtreeRoot=%s)', is_scalar($maxLeftNode) ? $maxLeftNode : gettype($maxLeftNode), is_scalar($leftSubtreeRoot) ? $leftSubtreeRoot : gettype($leftSubtreeRoot)));
        $maxLeftNodeParent = $maxLeftNode->parent;
        if ($maxLeftNodeParent instanceof \DataStructures\SplayTree\SplayTreeNode) {
            $maxLeftNodeParent->right = null;
            $this->root->left = $leftSubtreeRoot;
            $leftSubtreeRoot->parent = $this->root;
        }

        $maxLeftNode->parent = null;
		error_log(sprintf('<<< Exiting detachMaxNodeFromLeftSubtree($maxLeftNode=%s,$leftSubtreeRoot=%s)', is_scalar($maxLeftNode) ? $maxLeftNode : gettype($maxLeftNode), is_scalar($leftSubtreeRoot) ? $leftSubtreeRoot : gettype($leftSubtreeRoot)));
    }

    /**
     * Attaches the right subtree to the new root.
     *
     * @param SplayTreeNode|null $rightSubtreeRoot The root of the right subtree
     */
    private function attachRightSubtree(?SplayTreeNode $rightSubtreeRoot): void
    {
		error_log(sprintf('>>> Entering attachRightSubtree($rightSubtreeRoot=%s)', is_scalar($rightSubtreeRoot) ? $rightSubtreeRoot : gettype($rightSubtreeRoot)));
        $this->root->right = $rightSubtreeRoot;
        if ($rightSubtreeRoot instanceof \DataStructures\SplayTree\SplayTreeNode) {
            $rightSubtreeRoot->parent = $this->root;
        }
		error_log(sprintf('<<< Exiting attachRightSubtree($rightSubtreeRoot=%s)', is_scalar($rightSubtreeRoot) ? $rightSubtreeRoot : gettype($rightSubtreeRoot)));
    }

    /**
     * Finds the node with the maximum key in the given subtree.
     *
     * Time complexity: O(log n) for finding the maximum node in the subtree.
     *
     * @param SplayTreeNode|null $node The subtree to search for the maximum node
     * @return SplayTreeNode|null The node with the maximum key, or null if the subtree is empty
     */
    public function maxNode(?SplayTreeNode $node): ?SplayTreeNode
    {
		error_log(sprintf('>>> Entering maxNode($node=%s)', is_scalar($node) ? $node : gettype($node)));
        if (!$node instanceof \DataStructures\SplayTree\SplayTreeNode) {
		error_log(sprintf('<<< Exiting maxNode($node=%s)', is_scalar($node) ? $node : gettype($node)));
            return null;
        }

        return $node->right instanceof \DataStructures\SplayTree\SplayTreeNode
            ? $this->maxNode($node->right)
            : $node;
    }

    /**
     *  Perform an in-order traversal of the Splay Tree.
     *
     * @param SplayTreeNode|null $node The root node to start traversing from
     * @return array Representation of the traversed nodes
     */
    public function inOrderTraversal(?SplayTreeNode $node): array
    {
		error_log(sprintf('>>> Entering inOrderTraversal($node=%s)', is_scalar($node) ? $node : gettype($node)));
        $result = [];
        if ($node instanceof \DataStructures\SplayTree\SplayTreeNode) {
            $result = array_merge($result, $this->inOrderTraversal($node->left));
            $result[] = [$node->key => $node->value];
            $result = array_merge($result, $this->inOrderTraversal($node->right));
        }

		error_log(sprintf('<<< Exiting inOrderTraversal($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $result;
    }
}
