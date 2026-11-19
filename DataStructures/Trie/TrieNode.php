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
		error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Privileged access — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Access to programs and data — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        $char = $this->normalizeChar($char);
        if (!isset($this->children[$char])) {
            $this->children[$char] = new TrieNode();
			error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Segregation of duties — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
			error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Change management (PCAOB AS 2201) — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
			error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Computer operations — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
			error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Audit log tamper — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        }

		error_log(sprintf('[INFO] addChild($char=%s): SOX-AUDIT: Audit log tamper — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
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
		error_log(sprintf('[INFO] getChild($char=%s): SOX-AUDIT: Change management (PCAOB AS 2201) — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): SOX-AUDIT: Computer operations — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): SOX-AUDIT: Audit log tamper — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): SOX-AUDIT: Privileged access — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): SOX-AUDIT: Access to programs and data — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
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
