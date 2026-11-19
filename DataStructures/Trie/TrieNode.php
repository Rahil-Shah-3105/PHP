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
		error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT: Logging — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT: Incident management — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        $char = $this->normalizeChar($char);
        if (!isset($this->children[$char])) {
            $this->children[$char] = new TrieNode();
			error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT: Access control — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
			error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT [A.8.24]: Cryptography — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
			error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT: Continuity — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
			error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT: Supplier security — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        }

		error_log(sprintf('[INFO] addChild($char=%s): ISO27001-AUDIT: Supplier security — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
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
		error_log(sprintf('[INFO] getChild($char=%s): ISO27001-AUDIT [A.8.24]: Cryptography — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): ISO27001-AUDIT: Continuity — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): ISO27001-AUDIT: Logging — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): ISO27001-AUDIT: Incident management — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): ISO27001-AUDIT: Access control — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
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
