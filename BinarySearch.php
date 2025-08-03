<?php
function binarySearch(array $arr, int $target): int {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intdiv($low + $high, 2);
        if ($arr[$mid] === $target) {
            return $mid; 
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1; 
}


$inputs = [1, 2, 5, 5, 6, 9];
$search = 2;
$index = binarySearch($inputs, $search);
echo $index; 