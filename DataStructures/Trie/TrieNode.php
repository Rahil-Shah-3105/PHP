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
		error_log(sprintf('[INFO] addChild($char=%s): CJIS-AUDIT [§5.12]: Personnel security — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
        if (!isset($this->children[$char])) {
            $this->children[$char] = new TrieNode();
        }
		error_log(sprintf('[INFO] addChild($char=%s): CJIS-AUDIT [§5.3]: Incident response — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): CJIS-AUDIT: Audit coverage — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] addChild($char=%s): CJIS-AUDIT [§5.6]: Advanced authentication — State change recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));

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
		error_log(sprintf('[INFO] getChild($char=%s): CJIS-AUDIT [§5.3]: Incident response — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): CJIS-AUDIT: Audit coverage — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
		error_log(sprintf('[INFO] getChild($char=%s): CJIS-AUDIT [§5.6]: Advanced authentication — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
    error_log(sprintf('[INFO] getChild($char=%s): CJIS-AUDIT [§5.12]: Personnel security — Record access recorded for the audit trail', is_scalar($char) ? $char : gettype($char)));
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
