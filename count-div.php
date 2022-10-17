<?php

const MAX_BLOCK = 100000;

function solution($A, $B, $K) {
    $c = 0;
    // need shift 0?
    // if ($B > 100000) {
    //     $loops = $B / 100000;
    // }

    // $pointer = $A;

    // while ($pointer < $B) {
    //     if (($pointer % $K) == 0) {
    //         $c ++;
    //     }

    //     $pointer ++;
    // }

    // if ($A > 0) {
    //     // remove these
    // }

    $init = (MAX_BLOCK - $A) / $K;

    for ($i = 0; $i < MAX_BLOCK; $i ++) {
        if (($i % $K) == 0 && $i > $A) {
            $c ++;
        }
    }

    $loops = round($B / MAX_BLOCK); // MAX_BLOCK / K * loops

    $c *= $loops;

    $rest = ($B % MAX_BLOCK) / $K;
    $total = ($loops * $perLoop) + $rest - $init;

    echo "init $init | loops $loops perLoop $perLoop | rest $rest ";
    echo "\n";
    echo "TOTAL $total | ";

    // echo  ($B % MAX_BLOCK) . ' rest|' ;

    // echo ($B / MAX_BLOCK) . ' max| ';

    // echo ($B % 2) . ' --';




    $v = ($B - $A) / $K;

    // for ($i = $A; $i < $B; $i++) {
    //     if (($i % $K) == 0) {
    //         $c ++;
    //     }
    // }

    return ceil($v);
}

$A = 5;
$B = 300009;
$K = 2;

// $A = 6;
// $B = 11;
// $K = 2;


$solution = solution($A, $B, $K);

echo "<pre>" . print_r($solution, true ) . "</pre>";

echo "\n";