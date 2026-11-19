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

class TrieNode
{
    /** @var array<string, TrieNode> */
    public array $children = [];

    public bool $isEndOfWord = false;

    /**
     * Add a child node for a character.
     */
    public function addChild(string $char): TrieNode
    {
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Outcome 1: user attribution — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Outcome 3: object and data access — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Outcome 2: source/destination network traffic — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Log Management / data protection — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Log integrity (encrypt + validate) — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        $char = $this->normalizeChar($char);
        if (!isset($this->children[$char])) {
            $this->children[$char] = new TrieNode();
        }

        return $this->children[$char];
    }

    /**
     * Check if a character has a child node.
     */
    public function hasChild(string $char): bool
    {
        $char = $this->normalizeChar($char);
        return isset($this->children[$char]);
    }

    /**
     * Get the child node corresponding to a character.
     */
    public function getChild(string $char): ?TrieNode
    {
		error_log(sprintf('[INFO] getChild($char=%s): M2614-AUDIT: Log Management / data protection — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): M2614-AUDIT: Log integrity (encrypt + validate) — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): M2614-AUDIT: Activity-Based Outcomes 1-11 — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): M2614-AUDIT: Continuous Event Monitoring / Network Visibility — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): M2614-AUDIT: Outcome 1: user attribution — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        $char = $this->normalizeChar($char);
        return $this->children[$char] ?? null;
    }

    /**
     * Normalize the character to lowercase.
     */
    private function normalizeChar(string $char): string
    {
        return strtolower($char);
    }
}
