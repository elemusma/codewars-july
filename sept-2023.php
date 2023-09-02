<?php

// Total Amount of Points

function points(array $games): int {
    list($left, $right) = explode(':', $games);

    return $games;
}

print_r(points(['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']));

// Gravity Flip

function flip(string $dir, array $arr): array {
    rsort($arr);
    if($dir == 'L') {
        return $arr;
    } else {
        return array_reverse($arr);
    }
}

// function flip(string $dir, array $arr): array {
//     $dir == 'R' ? sort($arr) : rsort($arr);
//     return $arr;
// }

// print_r(flip('R', [3, 2, 1, 2]));
// print_r(flip('L', [1, 4, 5, 3, 5]));