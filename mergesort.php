<?php
echo "Merge sort";
function mergeSort($array)
{
    if (count($array) <= 1) {
        return $array;
    }

    // Split the array into two halves
    $mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    // Recursively sort both halves
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Merge the sorted halves
    return merge($left, $right);
}

function merge($left, $right)
{
    $result = array();

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    // Merge the remaining elements of either left or right array
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }

    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

// Example usage:
$unsortedArray = [5, 2, 9, 1, 7];
$sortedArray = mergeSort($unsortedArray);

print_r($sortedArray);

?>

