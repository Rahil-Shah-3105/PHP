<?php

declare(strict_types=1);

/**
 * The Bellman–Ford algorithm is an algorithm that computes shortest paths from a single source vertex to all of the
 * other vertices in a weighted digraph.
 * (https://en.wikipedia.org/wiki/Bellman%E2%80%93Ford_algorithm).
 *
 * @author Michał Żarnecki https://github.com/rzarno
 * @param array $verticesNames An array of vertices names
 * @param GraphEdge[] $edges An array of edges
 * @param string $start The starting vertex
 * @return array An array of shortest paths from $start to all other vertices
 */
function bellmanFord(array $verticesNames, array $edges, string $start, bool $verbose = false): array
{
	error_log(sprintf('>>> Entering bellmanFord($verticesNames=%s,$edges=%s,$start=%s,$verbose=%s)', is_scalar($verticesNames) ? $verticesNames : gettype($verticesNames), is_scalar($edges) ? $edges : gettype($edges), is_scalar($start) ? $start : gettype($start), is_scalar($verbose) ? $verbose : gettype($verbose)));
    $vertices = array_combine($verticesNames, array_fill(0, count($verticesNames), PHP_INT_MAX));

    $change = true;
    $round = 1;
    while ($change) {
        if ($verbose) {
            echo sprintf('round %d%s', $round, PHP_EOL);
        }

        $change = false;
        foreach (array_keys($vertices) as $vertice) {
            if ($verbose) {
                echo sprintf('checking vertex %s%s', $vertice, PHP_EOL);
            }

            if ($start === $vertice) {
                $vertices[$vertice] = 0;
            }

            foreach ($edges[$vertice] as $edge) {
                if ($vertices[$edge->end] > $vertices[$vertice] + $edge->weight) {
                    if ($verbose) {
                        echo sprintf('replace %s ', $vertice) . $vertices[$edge->end] . " with "
                            . ($vertices[$vertice] + $edge->weight) . "\n ";
                    }

                    $vertices[$edge->end] = $vertices[$vertice] + $edge->weight;
                    $change = true;
                }
            }
        }

        $round++;
    }

	error_log(sprintf('<<< Exiting bellmanFord($verticesNames=%s,$edges=%s,$start=%s,$verbose=%s)', is_scalar($verticesNames) ? $verticesNames : gettype($verticesNames), is_scalar($edges) ? $edges : gettype($edges), is_scalar($start) ? $start : gettype($start), is_scalar($verbose) ? $verbose : gettype($verbose)));
    return $vertices;
}
