<?php
function divisibleBy($numbers, $divisor) {
  // write some code
  $newArr = [];

  for ($i = 0; $i < count($numbers); $i++) {
    if ( $numbers[$i] % $divisor === 0) {
        array_push($newArr, $numbers[$i]);
    }
  }

  return $newArr;
}

// print_r(divisibleBy([1, 2, 3, 4, 5, 6], 2));

// function symmetric_point($p, $q) {
//     // Your code here

//     $p1 = $p[0];
//     $p2 = $p[1];

//     $q1 = $q[0];
//     $q2 = $q[1];

//     $distance = sqrt(($p2 - $p1)^2 + ($q2 - $q1)^2);

//     $p1_symmetric = 2 * $q1 - $p1;
//     $p2_symmetric = 2 * $q2 - $p2;

//     return [$p1_symmetric, $p2_symmetric];

// }

echo json_encode(symmetric_point([0, 0], [1, 1]));
echo json_encode(symmetric_point([2, 6], [-2, -6]));

function symmetric_point($p, $q) {
    return [2 * $q[0] - $p[0], 2 * $q[1] - $p[1]];
}