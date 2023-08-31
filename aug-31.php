<?php
function removeEveryOther($array) {
  // write your code here
  $filteredArray = array_filter($array, function($key) {
    return $key % 2 === 0;
  }, ARRAY_FILTER_USE_KEY);
  
  return $filteredArray;
}

print_r(removeEveryOther(['hello', 'world', 'buy']));