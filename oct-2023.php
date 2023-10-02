<?php

function square_sum($numbers) : int {
    // Write your code here...

    $arr = [];
    foreach ($numbers as $num) {
        array_push($arr, $num**2);
    }

    return array_sum($arr);
}

// echo square_sum([1,2]);
echo square_sum([0, 3, 4, 5]);