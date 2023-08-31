<?php

// function removeEveryOther($array) {
//     // write your code here
//     $newArr = [];

//     for ($i = 0; $i < count($array); $i++) {
//         if ($i % 2 == 0) {
//             $newArr[] = $array[$i];
//         }
//     }
    
//     return $newArr;
// }

function removeEveryOther($array) {
    return array_filter($array, function($i) {
        return !($i % 2);
    }, ARRAY_FILTER_USE_KEY);
}

function removeEveryOther($array) {
    // write your code here
    foreach (range(1, count($array), 2) as $key) {
      unset($array[$key]);
    }
    
    return $array;
}

function removeEveryOther($array) {
    return array_filter(array_map(function ($value, $key) {
      return $key % 2 === 0 ? $value : null;
    }, $array, array_keys($array)));
}

print_r(removeEveryOther([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
echo '<br>';
print_r(removeEveryOther(['hello', 'world', 'buy']));
echo '<br>';
print_r(removeEveryOther(["Keep", "Remove", "Keep", "Remove", "Keep"]));
// function removeEveryOther($array) {
//     $result = [];
    
//     foreach ($array as $key => $value) {
//         if ($key % 2 == 0) {
//             $result[] = $value;
//         }
//     }
    
//     return $result;
// }