<?php
function draw_stairs($n) {
    $result = '';

    for ($i = 0; $i < $n; $i++) {
        $spaces = str_repeat(' ', $i);
        $result .= $spaces . 'I';
        if ($i < $n - 1) {
            $result .= "\n";
        }
    }

    return $result;
}

// echo draw_stairs(3);
// echo '<br>';
// echo draw_stairs(5);

function squareOrSquareRoot($array) {

  $newArr = [];

  for ($i = 0; $i < count($array); $i++) {
    $sqrt = sqrt($array[$i]);
    if(intval($sqrt) == $sqrt) {
        array_push($newArr, intval($sqrt));
    } else {
        array_push($newArr, pow($array[$i], 2));
    }
  }

  return $newArr;
}

print_r(squareOrSquareRoot([ 4, 3, 9, 7, 2, 1 ]));