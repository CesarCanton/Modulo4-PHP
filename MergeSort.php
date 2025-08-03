<?php
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i++];
    }

    while ($j < count($right)) {
        $result[] = $right[$j++];
    }

    return $result;
}


$arr = [38, 27, 43, 3, 9, 82, 10];
$result =mergeSort($arr);
print_r($result);