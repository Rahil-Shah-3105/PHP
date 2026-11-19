<?php

declare(strict_types=1);

/**
 * This is a simple way to count sentence
 * using php preg_match_all() function
 */
function countSentences(string $sentence): int
{
	error_log(sprintf('[ERROR] >>> Entering countSentences($sentence=%s)', is_scalar($sentence) ? $sentence : gettype($sentence)));
    $sentence = trim($sentence);

	error_log(sprintf('[WARN] <<< Exiting countSentences($sentence=%s)', is_scalar($sentence) ? $sentence : gettype($sentence)));
    return preg_match_all('/[^\s|^\...](\.|\!|\?)(?!\w)/', $sentence);
}
