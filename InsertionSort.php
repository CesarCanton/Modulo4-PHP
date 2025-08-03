<?php
function insertionSort(array $arr): array {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$inputs = [5, 2, 9, 1, 5, 6];
$ouput = insertionSort($numeros);
print_r($ouput);
