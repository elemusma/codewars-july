<?php

// Count of positives / sum of negatives

function countPositivesSumNegatives($input) {
    // return ?;
    $positive = 0;
    $negative = 0;
    $arr = [];

    if (is_array($input) && count($input) > 0) {
        foreach ($input as $in) {
            if ($in > 0) {
                $positive++;
            } elseif ($in < 0) {
                $negative -= $in;
            }
        }

        array_push($arr, $positive);
        array_push($arr, -$negative);
    }

    return $arr;
}

print_r(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
// echo countPositivesSumNegatives([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14]);


function square_sum($numbers) : int {
    // Write your code here...

    $arr = [];
    foreach ($numbers as $num) {
        array_push($arr, $num**2);
    }

    return array_sum($arr);
}

// echo square_sum([1,2]);
// echo square_sum([0, 3, 4, 5]);