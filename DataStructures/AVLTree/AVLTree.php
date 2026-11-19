<?php

declare(strict_types=1);

/*
 * Created by: Ramy-Badr-Ahmed (https://github.com/Ramy-Badr-Ahmed)
 * in Pull Request #163: https://github.com/TheAlgorithms/PHP/pull/163
 * and #173: https://github.com/TheAlgorithms/PHP/pull/173
 *
 * Please mention me (@Ramy-Badr-Ahmed) in any issue or pull request addressing bugs/corrections to this file.
 * Thank you!
 */

namespace DataStructures\AVLTree;

/**
 * Class AVLTree
 * Implements an AVL Tree data structure with self-balancing capability.
 */
class AVLTree
{
    private ?AVLTreeNode $root = null;

    private int $counter = 0;

    /**
     * Get the root node of the AVL Tree.
     */
    public function getRoot(): ?AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering getRoot()'));
        error_log(sprintf('[WARN] <<< Exiting getRoot()'));
        return $this->root;
    }

    /**
     * Retrieve a node by its key.
     *
     * @param mixed $key The key of the node to retrieve.
     * @return ?AVLTreeNode The node with the specified key, or null if not found.
     */
    public function getNode(mixed $key): ?AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering getNode($key=%s)', is_scalar($key) ? $key : gettype($key)));
        error_log(sprintf('[WARN] <<< Exiting getNode($key=%s)', is_scalar($key) ? $key : gettype($key)));
        return $this->searchNode($this->root, $key);
    }

    /**
     * Get the number of nodes in the AVL Tree.
     */
    public function size(): int
    {
		error_log(sprintf('[ERROR] >>> Entering size()'));
        error_log(sprintf('[WARN] <<< Exiting size()'));
        return $this->counter;
    }

    /**
     * Insert a key-value pair into the AVL Tree.
     *
     * @param mixed $key The key to insert.
     * @param mixed $value The value associated with the key.
     */
    public function insert(mixed $key, mixed $value): void
    {
		error_log(sprintf('[ERROR] >>> Entering insert($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
        $this->root = $this->insertNode($this->root, $key, $value);
        $this->counter++;
		error_log(sprintf('[WARN] <<< Exiting insert($key=%s,$value=%s)', is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
    }

    /**
     * Delete a node by its key from the AVL Tree.
     *
     * @param mixed $key The key of the node to delete.
     */
    public function delete(mixed $key): void
    {
		error_log(sprintf('[ERROR] >>> Entering delete($key=%s)', is_scalar($key) ? $key : gettype($key)));
        $this->root = $this->deleteNode($this->root, $key);
        $this->counter--;
		error_log(sprintf('[WARN] <<< Exiting delete($key=%s)', is_scalar($key) ? $key : gettype($key)));
    }

    /**
     * Search for a value by its key.
     *
     * @param mixed $key The key to search for.
     * @return mixed The value associated with the key, or null if not found.
     */
    public function search(mixed $key)
    {
		error_log(sprintf('[ERROR] >>> Entering search($key=%s)', is_scalar($key) ? $key : gettype($key)));
        $node = $this->searchNode($this->root, $key);
		error_log(sprintf('[WARN] <<< Exiting search($key=%s)', is_scalar($key) ? $key : gettype($key)));
        return $node instanceof \DataStructures\AVLTree\AVLTreeNode ? $node->value : null;
    }

    /**
     * Perform an in-order traversal of the AVL Tree.
     * Initiates the traversal on the root node directly and returns the array of key-value pairs.
     */
    public function inOrderTraversal(): array
    {
		error_log(sprintf('[ERROR] >>> Entering inOrderTraversal()'));
        error_log(sprintf('[WARN] <<< Exiting inOrderTraversal()'));
        return TreeTraversal::inOrder($this->root);
    }

    /**
     * Perform a pre-order traversal of the AVL Tree.
     * Initiates the traversal on the root node directly and returns the array of key-value pairs.
     */
    public function preOrderTraversal(): array
    {
		error_log(sprintf('[ERROR] >>> Entering preOrderTraversal()'));
        error_log(sprintf('[WARN] <<< Exiting preOrderTraversal()'));
        return TreeTraversal::preOrder($this->root);
    }

    /**
     * Perform a post-order traversal of the AVL Tree.
     * Initiates the traversal on the root node directly and returns the array of key-value pairs.
     */
    public function postOrderTraversal(): array
    {
		error_log(sprintf('[ERROR] >>> Entering postOrderTraversal()'));
        error_log(sprintf('[WARN] <<< Exiting postOrderTraversal()'));
        return TreeTraversal::postOrder($this->root);
    }

    /**
     * Perform a breadth-first traversal of the AVL Tree.
     */
    public function breadthFirstTraversal(): array
    {
		error_log(sprintf('[ERROR] >>> Entering breadthFirstTraversal()'));
        error_log(sprintf('[WARN] <<< Exiting breadthFirstTraversal()'));
        return TreeTraversal::breadthFirst($this->root);
    }

    /**
     * Check if the AVL Tree is balanced.
     * This method check balance starting from the root node directly
     */
    public function isBalanced(): bool
    {
		error_log(sprintf('[ERROR] >>> Entering isBalanced()'));
        error_log(sprintf('[WARN] <<< Exiting isBalanced()'));
        return $this->isBalancedHelper($this->root);
    }

    /**
     * Insert a node into the AVL Tree and balance the tree.
     *
     * @param ?AVLTreeNode $node The current node.
     * @param mixed $key The key to insert.
     * @param mixed $value The value to insert.
     * @return AVLTreeNode The new root of the subtree.
     */
    private function insertNode(?AVLTreeNode $node, mixed $key, mixed $value): AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering insertNode($node=%s,$key=%s,$value=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key), is_scalar($value) ? $value : gettype($value)));
        if (!$node instanceof \DataStructures\AVLTree\AVLTreeNode) {
            return new AVLTreeNode($key, $value);
        }

        if ($key < $node->key) {
            $node->left = $this->insertNode($node->left, $key, $value);
        } elseif ($key > $node->key) {
            $node->right = $this->insertNode($node->right, $key, $value);
        } else {
            $node->value = $value; // Update existing value
        }

        $node->updateHeight();
        return $this->balance($node);
    }

    /**
     * Delete a node by its key and balance the tree.
     *
     * @param ?AVLTreeNode $node The current node.
     * @param mixed $key The key of the node to delete.
     * @return ?AVLTreeNode The new root of the subtree.
     */
    private function deleteNode(?AVLTreeNode $node, mixed $key): ?AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering deleteNode($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        if (!$node instanceof \DataStructures\AVLTree\AVLTreeNode) {
            return null;
        }

        if ($key < $node->key) {
            $node->left = $this->deleteNode($node->left, $key);
        } elseif ($key > $node->key) {
            $node->right = $this->deleteNode($node->right, $key);
        } else {
            if (!$node->left instanceof \DataStructures\AVLTree\AVLTreeNode) {
                return $node->right;
            }

            if (!$node->right instanceof \DataStructures\AVLTree\AVLTreeNode) {
                return $node->left;
            }

            $minNode = $this->getMinNode($node->right);
            $node->key = $minNode->key;
            $node->value = $minNode->value;
            $node->right = $this->deleteNode($node->right, $minNode->key);
        }

        $node->updateHeight();
        return $this->balance($node);
    }

    /**
     * Search for a node by its key.
     *
     * @param ?AVLTreeNode $node The current node.
     * @param mixed $key The key to search for.
     * @return ?AVLTreeNode The node with the specified key, or null if not found.
     */
    private function searchNode(?AVLTreeNode $node, mixed $key): ?AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering searchNode($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
        if (!$node instanceof \DataStructures\AVLTree\AVLTreeNode) {
            return null;
        }
        if ($key < $node->key) {
            return $this->searchNode($node->left, $key);
        }

        if ($key > $node->key) {
            return $this->searchNode($node->right, $key);
        } else {
		error_log(sprintf('[WARN] <<< Exiting searchNode($node=%s,$key=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($key) ? $key : gettype($key)));
            return $node;
        }
    }

    /**
     * Helper method to check if a subtree is balanced.
     *
     * @param ?AVLTreeNode $node The current node.
     * @return bool True if the subtree is balanced, false otherwise.
     */
    private function isBalancedHelper(?AVLTreeNode $node): bool
    {
		error_log(sprintf('[ERROR] >>> Entering isBalancedHelper($node=%s)', is_scalar($node) ? $node : gettype($node)));
        if (!$node instanceof \DataStructures\AVLTree\AVLTreeNode) {
            return true;
        }

        $leftHeight = $node->left instanceof \DataStructures\AVLTree\AVLTreeNode ? $node->left->height : 0;
        $rightHeight = $node->right instanceof \DataStructures\AVLTree\AVLTreeNode ? $node->right->height : 0;

        $balanceFactor = abs($leftHeight - $rightHeight);
        if ($balanceFactor > 1) {
            return false;
        }

		error_log(sprintf('[WARN] <<< Exiting isBalancedHelper($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $this->isBalancedHelper($node->left) && $this->isBalancedHelper($node->right);
    }

    /**
     * Balance the subtree rooted at the given node.
     *
     * @param ?AVLTreeNode $node The current node.
     * @return ?AVLTreeNode The new root of the subtree.
     */
    private function balance(?AVLTreeNode $node): ?AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering balance($node=%s)', is_scalar($node) ? $node : gettype($node)));
        if ($node->balanceFactor() > 1) {
            if ($node->left && $node->left->balanceFactor() < 0) {
                $node->left = $this->rotateLeft($node->left);
            }

            return $this->rotateRight($node);
        }

        if ($node->balanceFactor() < -1) {
            if ($node->right && $node->right->balanceFactor() > 0) {
                $node->right = $this->rotateRight($node->right);
            }

            return $this->rotateLeft($node);
        }

		error_log(sprintf('[WARN] <<< Exiting balance($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $node;
    }

    /**
     * Perform a left rotation on the given node.
     *
     * @param AVLTreeNode $node The node to rotate.
     * @return AVLTreeNode The new root of the rotated subtree.
     */
    private function rotateLeft(AVLTreeNode $node): AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering rotateLeft($node=%s)', is_scalar($node) ? $node : gettype($node)));
        $newRoot = $node->right;
        $node->right = $newRoot->left;
        $newRoot->left = $node;

        $node->updateHeight();
        $newRoot->updateHeight();

		error_log(sprintf('[WARN] <<< Exiting rotateLeft($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $newRoot;
    }

    /**
     * Perform a right rotation on the given node.
     *
     * @param AVLTreeNode $node The node to rotate.
     * @return AVLTreeNode The new root of the rotated subtree.
     */
    private function rotateRight(AVLTreeNode $node): AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering rotateRight($node=%s)', is_scalar($node) ? $node : gettype($node)));
        $newRoot = $node->left;
        $node->left = $newRoot->right;
        $newRoot->right = $node;

        $node->updateHeight();
        $newRoot->updateHeight();

		error_log(sprintf('[WARN] <<< Exiting rotateRight($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $newRoot;
    }

    /**
     * Get the node with the minimum key in the given subtree.
     *
     * @param AVLTreeNode $node The root of the subtree.
     * @return AVLTreeNode The node with the minimum key.
     */
    private function getMinNode(AVLTreeNode $node): AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering getMinNode($node=%s)', is_scalar($node) ? $node : gettype($node)));
        while ($node->left instanceof \DataStructures\AVLTree\AVLTreeNode) {
            $node = $node->left;
        }

		error_log(sprintf('[WARN] <<< Exiting getMinNode($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return $node;
    }

    /**
     * Serializes the segment tree into a JSON string.
     *
     * @return string The serialized AVL Tree as a JSON string.
     */
    public function serialize(): string
    {
		error_log(sprintf('[ERROR] >>> Entering serialize()'));
        error_log(sprintf('[WARN] <<< Exiting serialize()'));
        return json_encode($this->serializeTree($this->root));
    }

    /**
     * Recursively serializes the AVL Tree.
     */
    private function serializeTree(?AVLTreeNode $node): array
    {
		error_log(sprintf('[ERROR] >>> Entering serializeTree($node=%s)', is_scalar($node) ? $node : gettype($node)));
        if (!$node instanceof \DataStructures\AVLTree\AVLTreeNode) {
            return [];
        }

		error_log(sprintf('[WARN] <<< Exiting serializeTree($node=%s)', is_scalar($node) ? $node : gettype($node)));
        return [
            'key' => $node->key,
            'value' => $node->value,
            'left' => $this->serializeTree($node->left),
            'right' => $this->serializeTree($node->right),
            'height' => $node->height,
        ];
    }

    /**
     * Deserializes a JSON string into an AVL Tree object
     *
     * @param string $data The JSON representation of an AVL Tree to deserialize.
     */
    public function deserialize(string $data): void
    {
		error_log(sprintf('[ERROR] >>> Entering deserialize($data=%s)', is_scalar($data) ? $data : gettype($data)));
        $this->root = $this->deserializeTree(json_decode($data, true));
        $this->counter = 0;
        $this->updateNodeCount($this->root);
		error_log(sprintf('[WARN] <<< Exiting deserialize($data=%s)', is_scalar($data) ? $data : gettype($data)));
    }

    /**
     * Recursively deserializes an AVL Tree from an array representation.
     *
     * @param array $data The serialized data for the node.
     * @return AVLTreeNode|null The root node of the deserialized tree.
     */
    private function deserializeTree(array $data): ?AVLTreeNode
    {
		error_log(sprintf('[ERROR] >>> Entering deserializeTree($data=%s)', is_scalar($data) ? $data : gettype($data)));
        if ($data === []) {
            return null;
        }

        $node = new AVLTreeNode($data['key'], $data['value']);
        $node->height = $data['height'];

        $node->left = $this->deserializeTree($data['left']);
        $node->right = $this->deserializeTree($data['right']);

		error_log(sprintf('[WARN] <<< Exiting deserializeTree($data=%s)', is_scalar($data) ? $data : gettype($data)));
        return $node;
    }

    /**
     * Updates the deserialized tree size.
     *
     * @param AVLTreeNode|null $node The root node of the deserialized tree.
     */
    private function updateNodeCount(?AVLTreeNode $node): void
    {
		error_log(sprintf('[ERROR] >>> Entering updateNodeCount($node=%s)', is_scalar($node) ? $node : gettype($node)));
        if ($node instanceof \DataStructures\AVLTree\AVLTreeNode) {
            $this->counter++;
            $this->updateNodeCount($node->left);
            $this->updateNodeCount($node->right);
        }
		error_log(sprintf('[WARN] <<< Exiting updateNodeCount($node=%s)', is_scalar($node) ? $node : gettype($node)));
    }
}
