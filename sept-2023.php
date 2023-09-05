<?php

// Total Amount of Points

function points(array $games): int {

    $totalPoints = 0;

    foreach ($games as $game) {
        list($left, $right) = explode(':', $game);
        // Process $left and $right here to calculate points
        if ($left > $right) {
            $totalPoints += 3;
        } elseif ($left < $right) {
            $totalPoints += 0;
        } elseif ($left == $right) {
            $totalPoints += 1;
        }
        // Add the calculated points to $totalPoints
    }

    return $totalPoints;
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