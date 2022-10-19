<?php

// inputs:
// X file size
// B[K] len
//  list of bytes downloaded each minute
// 

function solution($X, $B, $Z) {
    if ($X < 0) {
        return 0;
    }

    if (0 == count($B)) {
        return $X;
    }

    $done = array_sum($B); //sum array

    $remain = $X - $done;

    $avgArray = [];

    for ($i = count($B) - 1; $i > ((count($B) - 1) - $Z); $i --) {
        // echo " -arr $i ";
        // echo "\n";
        $avgArray[] = $B[$i];
    }

    // echo "<pre>" . print_r($avgArray, true ) . "</pre>";
    $avg = $Z > 0 ? array_sum($avgArray) / $Z : -1;

    echo "done $done remain $remain $avg";
    echo "\n";

    $totalMinutes = $avg > 0 ? ceil($remain / $avg) : -1;
// echo " |$totalMinutes|";
    return $totalMinutes;
}

// $X = 100;
// $B = [10, 6, 6, 8];
// $Z = 2;

$X = 10;
// $B = [2, 3, 4, 3];
$B = [10];
$Z = 0;


echo "SOL: ";
echo "\n -- ";
echo solution($X, $B, $Z);
echo " -- ";
