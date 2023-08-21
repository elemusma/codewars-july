<?php

function removeEveryOther($array) {
    // write your code here
    $newArr = [];

    // $start = 1;
    // $increment = 2;
    for ($i = 0; $i < count($array); $i++) {
        // echo $i;
        // unset($array[1]);
        $i++;
        array_push($newArr, $array[$i-1]);
        // $currentValue = ($start + ($i * $increment)) - 1;
        // echo $currentValue . '<br>';
        // if($currentValue < count($array)) {
        //     array_push($newArr, $array[$currentValue]);
        // }
    }
    // return $array;
    return $newArr;
}

print_r(removeEveryOther([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
echo '<br>';
print_r(removeEveryOther(['hello', 'world', 'buy']));
// function removeEveryOther($array) {
//     $result = [];
    
//     foreach ($array as $key => $value) {
//         if ($key % 2 == 0) {
//             $result[] = $value;
//         }
//     }
    
//     return $result;
// }