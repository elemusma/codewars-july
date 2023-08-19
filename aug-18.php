<?php

function format_money(float $amount): string {
    // Your formatting code here
    // if (preg_match('/^\d+\.\d{2}$/', $amount) === 1) {
    //     echo $amount;
    //     return '$' . $amount;
    // } elseif(preg_match('/^\d+\.\d{1}$/', $amount) === 1) {
    //     echo $amount;
    //     return '$' . $amount . 0;
    // } elseif(is_int($amount)) {
    //     echo $amount;
    //     return '$' . $amount . 00;
    // }
    
    // echo $amount . ' last return';
    return '$' . sprintf('%.2f', $amount);
  }

  // print_r(format_money(39.99));
  // echo '\n';
  // print_r(format_money(3.1));
  // echo '\n';
  // print_r(format_money(3));


function differenceInAges($ages) {

  $newArr = [];

  $highest = max($ages);
  $min = min($ages);

  array_push($newArr, $min);
  array_push($newArr, $highest);
  array_push($newArr, $highest - $min);

  return $newArr;
}

// print_r(differenceInAges([82, 15, 6, 38, 35]));

function elevator($left, $right, $call) {
  // code on! 🙂

  // if( $left - $call == 0 && $right - $call == 0) {
  //   return 'right';
  // } else
  if (abs($left - $call) > abs($right - $call)) {
    return 'right';
  } elseif (abs($right - $call) > abs($left - $call)) {
    return 'left';
  } else {
    return 'right';
  }

}

echo elevator(0, 2, 0);
echo '<br>';
echo elevator(1, 2, 0);
echo '<br>';
echo elevator(2, 1, 0);
echo '<br>';
echo elevator(0, 2, 1);