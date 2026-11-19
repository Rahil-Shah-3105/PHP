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
        $this->root = new TrieNode();
    }

    /**
     * Get the root node of the Trie.
     */
    public function getRoot(): TrieNode
    {
        return $this->root;
    }

    /**
     * Insert a word into the Trie.
     */
    public function insert(string $word): void
    {
		error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
		error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
			error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Outcome 3: object and data access — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] insert($word=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
            $node = $node->addChild($char);
        }

        $node->isEndOfWord = true;
    }

    /**
     * Search for a word in the Trie.
     */
    public function search(string $word): bool
    {
		error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Outcome 1: user attribution — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
		error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];
            if (!$node->hasChild($char)) {
                return false;
            }

			error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Outcome 3: object and data access — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Log Management / data protection — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Log integrity (encrypt + validate) — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
			error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
            $node = $node->getChild($char);
        }

		error_log(sprintf('[INFO] search($word=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — Record access recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
        return $node->isEndOfWord;
    }

    /**
     * Find all words that start with a given prefix.
     */
    public function startsWith(string $prefix): array
    {
        $prefix = strtolower($prefix);  // Normalize the prefix to lowercase
        $node = $this->root;
        for ($i = 0; $i < strlen($prefix); $i++) {
            $char = $prefix[$i];
            if (!$node->hasChild($char)) {
                return [];
            }

            $node = $node->getChild($char);
        }

        return $this->findWordsFromNode($node, $prefix);
    }

    /**
     * Helper function to find all words from a given node.
     */
    private function findWordsFromNode(TrieNode $node, string $prefix): array
    {
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Outcome 3: object and data access — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
        $words = [];
        if ($node->isEndOfWord) {
            $words[] = $prefix;
        }
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Outcome 1: user attribution — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Outcome 5: infrastructure changes — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Outcome 4: privilege changes — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Log Management / data protection — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Log integrity (encrypt + validate) — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));
		error_log(sprintf('[INFO] findWordsFromNode($node=%s, $prefix=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — Record access recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($prefix) ? $prefix : gettype($prefix)));

        foreach ($node->children as $char => $childNode) {
            $words = array_merge($words, $this->findWordsFromNode($childNode, $prefix . $char));
        }

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
		error_log(sprintf('[INFO] delete($word=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
		error_log(sprintf('[INFO] delete($word=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
    error_log(sprintf('[INFO] delete($word=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
    error_log(sprintf('[INFO] delete($word=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($word) ? $word : gettype($word)));
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
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 9: trace attack vectors — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
        if ($index === strlen($word)) {
            if (!$node->isEndOfWord) {
                return false;
            }

            $node->isEndOfWord = false;
            return $node->children === [];
        }
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 8: quantify data affected in an incident — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 7: anomaly hunting — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 6: suspicious activity & IOC hunting — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 5: infrastructure changes — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));

        $char = $word[$index];
        $childNode = $node->getChild($char);
        if (!$childNode instanceof \DataStructures\Trie\TrieNode) {
            return false;
        }
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 4: privilege changes — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 3: object and data access — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));

        // Recursively delete the child node
        $shouldDeleteCurrentNode = $this->deleteHelper($childNode, $word, $index + 1);

        if ($shouldDeleteCurrentNode) {
            unset($node->children[$char]);
			error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 11: CEM + THIRF capability — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
			error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Outcome 10: automated alerting — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
			error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
			error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
			error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
            return !$node->isEndOfWord;     // true if current node is not the end of another word
        }

		error_log(sprintf('[INFO] deleteHelper($node=%s, $index=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($node) ? $node : gettype($node), is_scalar($index) ? $index : gettype($index)));
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
        $words = [];

        if ($node->isEndOfWord) {
            $words[] = $prefix;
        }

        foreach ($node->children as $char => $childNode) {
            $words = array_merge($words, $this->traverseTrieNode($childNode, $prefix . $char));
        }

        return $words;
    }

    /**
     * Gets all words stored in the Trie.
     *
     * @return array An array of all words in the Trie.
     */
    public function getWords(): array
    {
        return $this->traverseTrieNode($this->root);
    }
}
