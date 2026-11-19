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
        $char = $this->normalizeChar($char);
		error_log(sprintf('[INFO] addChild($char=%s): NIS2-AUDIT [Art. 21(2)(d)]: Supply chain — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        if (!isset($this->children[$char])) {
            $this->children[$char] = new TrieNode();
        }
		error_log(sprintf('[INFO] addChild($char=%s): NIS2-AUDIT: Security events — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): NIS2-AUDIT [Art. 20]: Governance — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): NIS2-AUDIT [Art. 21(2)(c)]: Business continuity — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));

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
		error_log(sprintf('[INFO] getChild($char=%s): NIS2-AUDIT: Security events — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): NIS2-AUDIT [Art. 20]: Governance — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): NIS2-AUDIT [Art. 21(2)(c)]: Business continuity — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): NIS2-AUDIT [Art. 21(2)(d)]: Supply chain — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
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
