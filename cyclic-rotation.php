<?php

function solution($A, $K) {
    $c = 0;

    if (0 == count($A)) {
        return [];
    }

    do {
        $last = array_pop($A);
        array_unshift($A, $last);
        $c ++;
    } while ($c < $K);

    return $A;
}

$a = [1, 2, 3, 4, 5, 9];
$solution = solution($a, 15);

echo "<pre>" . print_r($solution, true ) . "</pre>";