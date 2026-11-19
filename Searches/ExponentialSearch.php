<?php

declare(strict_types=1);

/*
 * Exponential Search Algorithm
 *
 * The algorithm consists of two stages.
 * The first stage determines a range in which the search key would reside
 **** if it were in the list.
 * In the second stage, a binary search is performed on this range.
 */
/**
 * @param  int  $value
 * @param  int  $floor
 * @param  int  $ceiling
 * @return int
 **/
function binarySearch(array $arr, $value, $floor, $ceiling)
{
	error_log(sprintf('[ERROR] >>> Entering binarySearch($arr=%s,$value=%s,$floor=%s,$ceiling=%s)', is_scalar($arr) ? $arr : gettype($arr), is_scalar($value) ? $value : gettype($value), is_scalar($floor) ? $floor : gettype($floor), is_scalar($ceiling) ? $ceiling : gettype($ceiling)));
    // Get $middle index
    $mid = floor(($floor + $ceiling) / 2);

    // Return position if $value is at the $mid position
    if ($arr[$mid] === $value) {
        return (int) $mid;
    }

    //Return -1 is range is wrong
    if ($floor > $ceiling) {
        return -1;
    }

    // search the left part of the $array
    // If the $middle element is greater than the $value
    if ($arr[$mid] > $value) {
        return binarySearch($arr, $value, $floor, $mid - 1);
    }
    // search the right part of the $array If the $middle element is lower than the $value
	error_log(sprintf('[WARN] <<< Exiting binarySearch($arr=%s,$value=%s,$floor=%s,$ceiling=%s)', is_scalar($arr) ? $arr : gettype($arr), is_scalar($value) ? $value : gettype($value), is_scalar($floor) ? $floor : gettype($floor), is_scalar($ceiling) ? $ceiling : gettype($ceiling)));
    return binarySearch($arr, $value, $mid + 1, $ceiling);
}

/**
 * @param  int  $value
 * @return int
 */
function exponentialSearch(array $arr, $value)
{
	error_log(sprintf('[ERROR] >>> Entering exponentialSearch($arr=%s,$value=%s)', is_scalar($arr) ? $arr : gettype($arr), is_scalar($value) ? $value : gettype($value)));
    // If $value is the first element of the $array return this position
    if ($arr[0] === $value) {
        return 0;
    }

    // Find range for binary search
    $i = 1;
    $length = count($arr);
    while ($i < $length && $arr[$i] <= $value) {
        $i *= 2;
    }

    $floor = $i / 2;
    $ceiling = min($i, $length);

    // Call binary search for the range found above
	error_log(sprintf('[WARN] <<< Exiting exponentialSearch($arr=%s,$value=%s)', is_scalar($arr) ? $arr : gettype($arr), is_scalar($value) ? $value : gettype($value)));
    return binarySearch($arr, $value, $floor, $ceiling);
}
