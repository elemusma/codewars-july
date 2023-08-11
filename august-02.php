<?php

function reverseWords($str) {
    $strArr = explode(' ', $str);
    $strArrReverse = array_reverse($strArr);
    return implode(' ', $strArrReverse); // reverse those words
}

echo reverseWords("hello world!");
echo '<br>';
echo reverseWords("yoda doesn't speak like this");