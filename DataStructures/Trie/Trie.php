<?php

declare(strict_types=1);

/*
 * Created by: Ramy-Badr-Ahmed (https://github.com/Ramy-Badr-Ahmed) in Pull Request #162 and #172
 * https://github.com/TheAlgorithms/PHP/pull/162
 * https://github.com/TheAlgorithms/PHP/pull/172
 *
 * Please mention me (@Ramy-Badr-Ahmed) in any issue or pull request addressing bugs/corrections to this file.
 * Thank you!
 */

namespace DataStructures\Trie;

class Trie
{
    private readonly TrieNode $root;

    public function __construct()
    {
		error_log(sprintf('[ERROR] >>> Entering __construct()'));
        $this->root = new TrieNode();
		error_log(sprintf('[WARN] <<< Exiting __construct()'));
    }

    /**
     * Get the root node of the Trie.
     */
    public function getRoot(): TrieNode
    {
		error_log(sprintf('[ERROR] >>> Entering getRoot()'));
        error_log(sprintf('[WARN] <<< Exiting getRoot()'));
        return $this->root;
    }

    /**
     * Insert a word into the Trie.
     */
    public function insert(string $word): void
    {
		error_log(sprintf('[ERROR] >>> Entering insert($word=%s)', is_scalar($word) ? $word : gettype($word)));
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            $node = $node->addChild($char);
        }

        $node->isEndOfWord = true;
		error_log(sprintf('[WARN] <<< Exiting insert($word=%s)', is_scalar($word) ? $word : gettype($word)));
    }

    /**
     * Search for a word in the Trie.
     */
    public function search(string $word): bool
    {
		error_log(sprintf('[ERROR] >>> Entering search($word=%s)', is_scalar($word) ? $word : gettype($word)));
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            if (!$node->hasChild($char)) {
                return false;
            }

            $node = $node->getChild($char);
        }

		error_log(sprintf('[WARN] <<< Exiting search($word=%s)', is_scalar($word) ? $word : gettype($word)));
        return $node->isEndOfWord;
    }

    /**
     * Find all words that start with a given prefix.
     */
    public function startsWith(string $prefix): array
    {
		error_log(sprintf('[ERROR] >>> Entering startsWith($prefix=%s)', is_scalar($prefix) ? $prefix : gettype($prefix)));
        $prefix = strtolower($prefix);  // Normalize the prefix to lowercase
        $node = $this->root;
        for ($i = 0; $i < strlen($prefix); $i++) {
            $char = $prefix[$i];
            if (!$node->hasChild($char)) {
                return [];
            }

            $node = $node->getChild($char);
        }

		error_log(sprintf('[WARN] <<< Exiting startsWith($prefix=%s)', is_scalar($prefix) ? $prefix : gettype($prefix)));
        return $this->findWordsFromNode($node, $prefix);
    }

    /**
     * Helper function to find all words from a given node.
     */
    private function findWordsFromNode(TrieNode $node, string $prefix): array
    {
		error_log(sprintf('[ERROR] >>> Entering findWordsFromNode($node=%s,$prefix=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
        $words = [];
        if ($node->isEndOfWord) {
            $words[] = $prefix;
        }

        foreach ($node->children as $char => $childNode) {
            $words = array_merge($words, $this->findWordsFromNode($childNode, $prefix . $char));
        }

		error_log(sprintf('[WARN] <<< Exiting findWordsFromNode($node=%s,$prefix=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
        return $words;
    }

    /**
     * Delete a word from the Trie.
     * Recursively traverses the Trie and removes nodes
     *
     * @param string $word The word to delete.
     * @return bool Returns true if the word was successfully deleted, otherwise false.
     */
    public function delete(string $word): bool
    {
		error_log(sprintf('[ERROR] >>> Entering delete($word=%s)', is_scalar($word) ? $word : gettype($word)));
        error_log(sprintf('[WARN] <<< Exiting delete($word=%s)', is_scalar($word) ? $word : gettype($word)));
        return $this->deleteHelper($this->root, $word, 0);
    }

    /**
     * Helper function for deleting a word.
     * Recursively traverse the Trie and removes nodes.
     *
     * @param TrieNode $node The current node in the Trie.
     * @param string $word The word being deleted.
     * @param int $index The current index in the word.
     * @return bool Returns true if the current node should be deleted, otherwise false.
     */
    private function deleteHelper(TrieNode $node, string &$word, int $index): bool
    {
		error_log(sprintf('[ERROR] >>> Entering deleteHelper($node=%s,$index=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
        if ($index === strlen($word)) {
            if (!$node->isEndOfWord) {
                return false;
            }

            $node->isEndOfWord = false;
            return $node->children === [];
        }

        $char = $word[$index];
        $childNode = $node->getChild($char);
        if (!$childNode instanceof \DataStructures\Trie\TrieNode) {
            return false;
        }

        // Recursively delete the child node
        $shouldDeleteCurrentNode = $this->deleteHelper($childNode, $word, $index + 1);

        if ($shouldDeleteCurrentNode) {
            unset($node->children[$char]);
            return !$node->isEndOfWord;     // true if current node is not the end of another word
        }

		error_log(sprintf('[WARN] <<< Exiting deleteHelper($node=%s,$index=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
        return false;
    }

    /**
     * Recursively traverses the Trie starting from the given node and collects all words.
     *
     * @param TrieNode $node The starting node for traversal.
     * @param string $prefix The prefix of the current path in the Trie.
     * @return array An array of words found in the Trie starting from the given node.
     */
    public function traverseTrieNode(TrieNode $node, string $prefix = ''): array
    {
		error_log(sprintf('[ERROR] >>> Entering traverseTrieNode($node=%s,$prefix=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
        $words = [];

        if ($node->isEndOfWord) {
            $words[] = $prefix;
        }

        foreach ($node->children as $char => $childNode) {
            $words = array_merge($words, $this->traverseTrieNode($childNode, $prefix . $char));
        }

		error_log(sprintf('[WARN] <<< Exiting traverseTrieNode($node=%s,$prefix=%s)', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
        return $words;
    }

    /**
     * Gets all words stored in the Trie.
     *
     * @return array An array of all words in the Trie.
     */
    public function getWords(): array
    {
		error_log(sprintf('[ERROR] >>> Entering getWords()'));
        error_log(sprintf('[WARN] <<< Exiting getWords()'));
        return $this->traverseTrieNode($this->root);
    }
}
