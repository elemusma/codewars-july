<?php

function nthEven($n) {
    // your code here
    
    // even numbers starting from 0 and adding 2
    
    // $start = 0;
    
    // for ($i = 0; $i < $n; $i++) {
    //   $start += 2;
    // }
    
    // return $start - 2;
    return 2 * ($n - 1);
}

// echo nthEven(1) . '<br>';
// echo nthEven(2) . '<br>';
// echo nthEven(3) . '<br>';
// echo nthEven(100) . '<br>';
// echo nthEven(1298734) . '<br>';

function monkeyCount($n) {
    // your code here
    $arr = [];

    for ($i = 1; $i <= $n; $i++){
        array_push($arr, $i);
    }
    return $arr;
  }

echo monkeyCount(5);