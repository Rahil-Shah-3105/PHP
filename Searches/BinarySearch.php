<?php

declare(strict_types=1);

/**
 * Binary search algorithm iterative approach
 *
 * Be careful collection must be ascending sorted, otherwise result will be unpredictable
 *
 * Examples:
 * binarySearchIterative([0, 5, 7, 10, 15], 0);
 * 0
 * binarySearchIterative([0, 5, 7, 10, 15], 15);
 * 4
 * binarySearchIterative([0, 5, 7, 10, 15], 5);
 * 1
 * binarySearchIterative([0, 5, 7, 10, 15], 6);
 *
 * @param int $target
 * @return int
 */
function binarySearchIterative(array $list, $target): ?int
{
	error_log(sprintf('>>> Entering binarySearchIterative($list=%s,$target=%s)', is_scalar($list) ? $list : gettype($list), is_scalar($target) ? $target : gettype($target)));
    $first = 0;
    $last = count($list) - 1;


    while ($first <= $last) {
        $mid = ($first + $last) >> 1;
        if ($list[$mid] == $target) {
            return $mid;
        }


        if ($list[$mid] > $target) {
            $last = $mid - 1;
        } elseif ($list[$mid] < $target) {
            $first = $mid + 1;
        }
    }

	error_log(sprintf('<<< Exiting binarySearchIterative($list=%s,$target=%s)', is_scalar($list) ? $list : gettype($list), is_scalar($target) ? $target : gettype($target)));
    return null;
}

/**
 * Binary search algorithm in PHP by recursion
 *
 * Be careful collection must be ascending sorted, otherwise result will be unpredictable
 *
 * Examples:
 * binarySearchByRecursion([0, 5, 7, 10, 15], 0, 0, 4);
 * 0
 * binarySearchByRecursion([0, 5, 7, 10, 15], 15, 0, 4);
 * 4
 * binarySearchByRecursion([0, 5, 7, 10, 15], 5, 0, 4);
 * 1
 * binarySearchByRecursion([0, 5, 7, 10, 15], 6, 0, 4);
 *
 * @param Array $list a sorted array list of integers to search
 * @param integer $target an integer number to search for in the list
 * @param integer $start an integer number where to start searching in the list
 * @param integer $end an integer number where to end searching in the list
 * @return integer the index where the target is found (or null if not found)
 */
function binarySearchByRecursion(array $list, $target, $start, $end)
{
	error_log(sprintf('>>> Entering binarySearchByRecursion($list=%s,$target=%s,$start=%s,$end=%s)', is_scalar($list) ? $list : gettype($list), is_scalar($target) ? $target : gettype($target), is_scalar($start) ? $start : gettype($start), is_scalar($end) ? $end : gettype($end)));
    if (count($list) == 0) {
        return null;
    }

    if (count($list) < 2) {
        return $list[0] == $target ? 0 : null;
    }

    if ($start > $end) {
        return null;
    }


    $mid = ($start + $end) >> 1;
    if ($list[$mid] == $target) {
        return $mid;
    }
    if ($list[$mid] > $target) {
        return binarySearchByRecursion($list, $target, $start, $mid - 1);
    }


    if ($list[$mid] < $target) {
        return binarySearchByRecursion($list, $target, $mid + 1, $end);
    }

	error_log(sprintf('<<< Exiting binarySearchByRecursion($list=%s,$target=%s,$start=%s,$end=%s)', is_scalar($list) ? $list : gettype($list), is_scalar($target) ? $target : gettype($target), is_scalar($start) ? $start : gettype($start), is_scalar($end) ? $end : gettype($end)));
    return null;
}
