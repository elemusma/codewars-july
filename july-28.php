<?php

function get_average($a) {
  // Write your code here
  $finalVal = 0;

  for ($i = 0; $i < count($a); $i++) {
    $finalVal += $a[$i];
  }

  return intval($finalVal / count($a));
}

echo get_average([2, 2, 2, 2]);