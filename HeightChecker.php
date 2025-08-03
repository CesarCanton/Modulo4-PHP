<?php
$heights = [3,1,2,4,3];
function heightChecker($heights)
{
    $expected = $heights;
    $indexes = [];
    sort($expected);
    $count = 0;
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $expected[$i]) {
            $count++;
            array_push($indexes, $i);
        }
    }
    echo "Inputs heights:";
    print_r($heights);
    echo "<br>";
    echo "Sorted heights:";
    print_r($expected);
    echo "<br>";
    echo "Number of mismatches: $count<br>";

    if ($count == 0) {
        echo "All heights are in the correct order. No mismatches found.\n";
    } else if ($count == 1) {
        echo "index: $indexes[0] is the only mismatch.\n";
    } else if ($count > 0 && $count < count($heights)) {
        echo "indexes ";
        for ($i = 0; $i < $count; $i++) {
            if ($i < $count-1) {
                echo "$indexes[$i], ";
            }
        }
        echo " and ".$indexes[$i-1]." are mismatches.\n";
    } else {
        echo "All heights are mismatched.\n";
    }
  
}
heightChecker($heights);

