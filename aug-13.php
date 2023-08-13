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

echo draw_stairs(3);
echo '<br>';
echo draw_stairs(5);