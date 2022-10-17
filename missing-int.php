<?php

function solution($A) {
    // write your code in PHP7.4
    $A = array_unique($A);
    sort($A);
    $A = array_filter($A);

    for ($i = $A[0]; $i < $A[count($A) - 1]; $i++) {
    	if ($i < 0 || in_array($i, $A)) {
    		continue;
    	}

        return $i;
    }

    $ret = $A[count($A) - 1] + 1 <= 0 ? 1 : $A[count($A) -1] + 1;

    return $ret;
}

$a = [2];
$solution = solution($a);

echo " $solution ";
echo "\n";