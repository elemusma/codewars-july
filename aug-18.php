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

  print_r(format_money(39.99));
  echo '\n';
  print_r(format_money(3.1));
  echo '\n';
  print_r(format_money(3));