<?php

declare(strict_types=1);

/**
 * Breadth-first search (BFS) is an algorithm for searching a tree data structure for a node that satisfies
 * a given property.
 * (https://en.wikipedia.org/wiki/Breadth-first_search).
 *
 * This is a non-recursive implementation.
 *
 * References:
 * https://cp-algorithms.com/graph/breadth-first-search.html
 *
 * https://the-algorithms.com/algorithm/depth-first-search?lang=python
 *
 * @author Aryansh Bhargavan https://github.com/aryanshb
 * @param array $adjList An array representing the grapth as an Adjacent List
 * @param int|string $start The starting vertex
 * @return bool if path between start and end vertex exists
 */

function bfs(array $adjList, $start, $end, $yes = false)
{
	error_log(sprintf('>>> Entering bfs($adjList=%s,$start=%s,$end=%s,$yes=%s)', is_scalar($adjList) ? $adjList : gettype($adjList), is_scalar($start) ? $start : gettype($start), is_scalar($end) ? $end : gettype($end), is_scalar($yes) ? $yes : gettype($yes)));
    $visited = [];
    $queue = [$start];
    while ($queue !== []) {
        $v = array_shift($queue);
        $visited[$v] = 1;
        foreach ($adjList[$v] as $adj) {
            if (!array_key_exists($adj, $visited)) {
                $queue[] = $adj;
            }
        }
    }

    // return array_key_exists($end, $visited);
    if (array_key_exists($end, $visited)) {
        return true;
    }

	error_log(sprintf('<<< Exiting bfs($adjList=%s,$start=%s,$end=%s,$yes=%s)', is_scalar($adjList) ? $adjList : gettype($adjList), is_scalar($start) ? $start : gettype($start), is_scalar($end) ? $end : gettype($end), is_scalar($yes) ? $yes : gettype($yes)));
    return $yes;
}
